<?php
require_once dirname(__FILE__).'/../config.php';

// Ochrona kontrolera przed nieautoryzowanym dostępem
include _ROOT_PATH.'/app/security/check.php';

// Pobieranie parametrów
function getInputParams(&$form) {
    $form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
    $form['interestRate'] = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
    $form['loanTerm'] = isset($_REQUEST['term']) ? $_REQUEST['term'] : null;
}

// Walidacja parametrów z przygotowaniem zmiennych dla widoku
function validateInputs(&$form, &$infos, &$messages, &$hide_intro) {
    if (!isset($form['amount']) || !isset($form['interestRate']) || !isset($form['loanTerm'])) {
        return false; // Brak parametrów
    }

    // Parametry zostały przekazane - ukrywamy wstęp strony
    $hide_intro = true;
    $infos[] = 'Przekazano parametry.';

    if ($form['amount'] == "") {
        $messages[] = 'Nie podano kwoty kredytu';
    }
    if ($form['interestRate'] == "") {
        $messages[] = 'Nie podano oprocentowania';
    }
    if ($form['loanTerm'] == "") {
        $messages[] = 'Nie podano okresu kredytowania';
    }

    if (count($messages) > 0) return false;

    // Sprawdzanie poprawności wartości liczbowych
    if (!is_numeric($form['amount']) || $form['amount'] <= 0) {
        $messages[] = 'Kwota kredytu musi być liczbą dodatnią';
    }

    if (!is_numeric($form['interestRate']) || $form['interestRate'] < 0) {
        $messages[] = 'Oprocentowanie musi być liczbą nieujemną';
    }

    if (!is_numeric($form['loanTerm']) || $form['loanTerm'] <= 0) {
        $messages[] = 'Okres kredytowania musi być liczbą dodatnią';
    }

    return count($messages) === 0;
}

// Obliczenia miesięcznej raty kredytu
function calculateMonthlyPayment(&$form, &$infos, &$result) {
    $infos[] = 'Parametry poprawne. Wykonuję obliczenia.';

    $amount = floatval($form['amount']);
    $interestRate = floatval($form['interestRate']);
    $loanTerm = floatval($form['loanTerm']);

    // Konwersja oprocentowania rocznego na miesięczne
    $monthlyRate = $interestRate / 100 / 12;
    $numPayments = $loanTerm * 12;

    if ($monthlyRate > 0) {
        $result = round(($amount * $monthlyRate) / (1 - pow(1 + $monthlyRate, -$numPayments)), 2);
    } else {
        $result = round($amount / $numPayments, 2); // 0% oprocentowania
    }
}

// Inicjalizacja zmiennych
$form = array();
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

// Pobierz dane i wykonaj walidację oraz obliczenia
getInputParams($form);
if (validateInputs($form, $infos, $messages, $hide_intro)) {
    calculateMonthlyPayment($form, $infos, $result);
}

// Ustalenie zawartości zmiennych elementów szablonu
$page_title = 'Kalkulator kredytowy';
$page_description = 'Dowiedz się, czy warto jest wziąć ten kredyt';
$page_header = 'Oblicz miesięczną ratę kredytu';
$page_footer = 'Czy warto wziąć kredyt?';

// Wywołanie widoku z przekazaniem zmiennych
include 'calc_view.php';
