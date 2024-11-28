<?php
  require_once $conf->root_path.'/lib/Messages.class.php';
  require_once $conf->root_path.'/app/CalcForm.class.php';
  require_once $conf->root_path.'/app/CalcResult.class.php';

  class CalcCtrl {

    private $msgs;
    private $form;
    private $result;

    public function __construct() {
      $this->msgs = new Messages();
      $this->form = new CalcForm();
      $this->result = new CalcResult();
    }

    // Pobranie parametrow
    public function getParams() {
      $this->form->amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
      $this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
      $this->form->interestRate = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;
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
        $this->msgs->addError("Nie podano kwoty!");
      }
      if($this->form->years == "") {
        $this->msgs->addError("Nie podano liczby lat!");
      }
      if($this->form->interestRate == "") {
        $this->msgs->addError("Nie podano oprocentowania!");
      }

      if($this->msgs->isError()) return false;

      // Sprawdzenie, czy nasze zmienne są liczbami
      if(!is_numeric($this->form->amount)) {
        $this->msgs->addError("Kwota nie jest liczbą!");
      }
      if(!is_numeric($this->form->years)) {
        $this->msgs->addError("Lata nie są liczbą!");
      }	
      if(!(is_numeric($this->form->interestRate))) {
        $this->msgs->addError("Oprocentowanie nie jest liczbą!");
      }
      
      return !$this->msgs->isError();
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
      global $conf, $smarty;
      $smarty->assign('form', $this->form);
      $smarty->assign('msgs', $this->msgs);
      $smarty->assign('res', $this->result);
      $smarty->assign('page_description', 'Wprowadź dane, aby obliczyć miesięczną ratę');
      $smarty->display($conf->root_path.'/app/calc_view.tpl');	
    }
  }
?>