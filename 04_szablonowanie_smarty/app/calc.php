<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

// Pobranie parametrow
function getParams(&$form) {
	$form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$form['interestRate'] = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;
}

// Walidacja parametrow z przygotowaniem zmiennych dla widoku
function validate(&$form, &$messages) {
	// Sprawdzenie, czy parametry zostały przekazane
	if(!(isset($form['amount']) && isset($form['years']) && isset($form['interestRate']))) {
		return false;
	}

	// Sprawdzenie, czy potrzebne wartości zostały przekazane
	if($form['amount'] == "") {
		$messages[] = "Nie podano kwoty!";
	}
	if($form['years'] == "") {
		$messages[] = "Nie podano liczby lat!";
	}
	if($form['interestRate'] == "") {
		$messages[] = "Nie podano oprocentowania!";
	}

	if(count($messages) > 0) return false;

	// Sprawdzenie, czy nasze zmienne są liczbami
	if(!is_numeric($form['amount'])) {
		$messages[] = "Kwota nie jest liczbą!";
	}
	if(!is_numeric($form['years'])) {
		$messages[] = "Lata nie są liczbą!";
	}	
	if(!(is_numeric($form['interestRate']))) {
		$messages[] = "Oprocentowanie nie jest liczbą!";
	}

	if(count($messages) > 0) return false;
	else return true;
}

// Przetworzenie danych
function process(&$form, &$messages, &$result) {
	global $role;
	$form['amount'] = floatval($form['amount']);
	$form['years'] = intval($form['years']);
	$form['interestRate'] = floatval($form['interestRate']);

	if($form['amount'] > 5000 && $role != 'admin') {
		$messages[] = "Tylko administrator może wprowadzać kwotę większą od 5000zł!";
		return;
	}
	
	$result = $form['amount']*(1 + $form['interestRate']/100) / ($form['years']*12);
	$result = number_format($result, 2);
}

function loadCalcView($form, $messages, $result) {
	global $smarty;
	$smarty->assign('form', $form);
	$smarty->assign('messages', $messages);
	$smarty->assign('result', $result);
	$smarty->assign('page_description', 'Wprowadź dane, aby obliczyć miesięczną ratę');
	$smarty->display(_ROOT_PATH.'/app/calc_view.tpl');	
}

// Zmienne kontrolera
$form = [];
$messages = [];
$monthlyPayment = null;

getParams($form);

if(validate($form, $messages)) {
	process($form, $messages, $monthlyPayment);
}

loadCalcView($form, $messages, $monthlyPayment);





