<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\utils\CalcResult;

  class CalcCtrl {

    private $form;
    private $result;

    public function __construct() {
      $this->form = new CalcForm();
      $this->result = new CalcResult();
    }

    // Pobranie parametrow
    public function getParams() {
      $this->form->amount = getFromRequest('amount');
      $this->form->years = getFromRequest('years');
      $this->form->interestRate = getFromRequest('interestRate');
    }

    // Walidacja parametrow
    public function validate() {
      // Sprawdzenie, czy parametry zostały przekazane
      if(!(isset($this->form->amount) && isset($this->form->years) && 
      isset($this->form->interestRate))) {
        return false;
      }

      // Sprawdzenie, czy potrzebne wartości zostały przekazane
      if($this->form->amount == "") {
        getMessages()->addError("Nie podano kwoty!");
      }
      if($this->form->years == "") {
        getMessages()->addError("Nie podano liczby lat!");
      }
      if($this->form->interestRate == "") {
        getMessages()->addError("Nie podano oprocentowania!");
      }

      if(getMessages()->isError()) return false;

      // Sprawdzenie, czy nasze zmienne są liczbami
      if(!is_numeric($this->form->amount)) {
        getMessages()->addError("Kwota nie jest liczbą!");
      }
      if(!is_numeric($this->form->years)) {
        getMessages()->addError("Lata nie są liczbą!");
      }	
      if(!(is_numeric($this->form->interestRate))) {
        getMessages()->addError("Oprocentowanie nie jest liczbą!");
      }
      
      return !getMessages()->isError();
    }

    public function process() {
      $this->getParams();

      if($this->validate()) {
        $this->form->amount = floatval($this->form->amount);
	      $this->form->years = intval($this->form->years);
        $this->form->interestRate = floatval($this->form->interestRate);
	      $this->result->result = $this->form->amount*(1 + $this->form->interestRate/100) / ($this->form->years*12);
	      $this->result->result = number_format($this->result->result, 2);
      }
      $this->generateView();
    }

    public function generateView() {
      getSmarty()->assign('form', $this->form);
      getSmarty()->assign('res', $this->result);
      getSmarty()->assign('page_description', 'Wprowadź dane, aby obliczyć miesięczną ratę');
      getSmarty()->display('calc_view.tpl');	
    }
  }
?>