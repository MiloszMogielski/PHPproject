<?php
require_once dirname(__FILE__).'/../config.php';

// Ochrona kontrolera przed nieautoryzowanym dostępem
include _ROOT_PATH.'/app/security/check.php';

function getInputParams(&$amount, &$interestRate, &$loanTerm) {
    $amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $interestRate = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
    $loanTerm = isset($_REQUEST['term']) ? $_REQUEST['term'] : null;    
}

function validateInputs(&$amount, &$interestRate, &$loanTerm, &$messages) {
    if (!(isset($amount) && isset($interestRate) && isset($loanTerm))) {
        return false; // Brak parametrów
    }

    if ($amount == "") {
        $messages[] = 'Nie podano kwoty kredytu';
    }
    if ($interestRate == "") {
        $messages[] = 'Nie podano oprocentowania';
    }
    if ($loanTerm == "") {
        $messages[] = 'Nie podano okresu kredytowania';
    }

    if (count($messages) != 0) return false;
    
    if (!is_numeric($amount) || $amount <= 0) {
        $messages[] = 'Kwota kredytu musi być liczbą dodatnią';
    }
    
    if (!is_numeric($interestRate) || $interestRate < 0) {
        $messages[] = 'Oprocentowanie musi być liczbą nieujemną';
    }

    if (!is_numeric($loanTerm) || $loanTerm <= 0) {
        $messages[] = 'Okres kredytowania musi być liczbą dodatnią';
    }

    return count($messages) === 0;
}

function calculateMonthlyPayment(&$amount, &$interestRate, &$loanTerm, &$result) {
    // Konwersja oprocentowania rocznego na miesięczne
    $monthlyRate = $interestRate / 100 / 12;
    // Liczba rat
    $numPayments = $loanTerm * 12;
    
    // Obliczanie miesięcznej raty
    if ($monthlyRate > 0) {
        $result = ($amount * $monthlyRate) / (1 - pow(1 + $monthlyRate, -$numPayments));
    } else {
        $result = $amount / $numPayments; // W przypadku 0% oprocentowania
    }
}

// Inicjalizacja zmiennych
$amount = null;
$interestRate = null;
$loanTerm = null;
$result = null;
$messages = array();

// Pobierz dane i wykonaj obliczenia
getInputParams($amount, $interestRate, $loanTerm);
if (validateInputs($amount, $interestRate, $loanTerm, $messages)) {
    calculateMonthlyPayment($amount, $interestRate, $loanTerm, $result);
}

// Wywołanie widoku z przekazaniem zmiennych
include 'calc_view.php';
