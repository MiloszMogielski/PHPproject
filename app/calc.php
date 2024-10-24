<?php
// Kontroler kalkulatora kredytowego
require_once dirname(__FILE__) . '/../config.php';

// Pobieranie danych z formularza
$loan_amount = $_REQUEST['loan_amount'] ?? null;
$interest_rate = $_REQUEST['interest_rate'] ?? null;
$years = $_REQUEST['years'] ?? null;

// Walidacja danych
$errors = [];

if (!$loan_amount || !$interest_rate || !$years) {
    $errors[] = 'Wszystkie pola są wymagane.';
}

if ($loan_amount === "" || !is_numeric($loan_amount) || $loan_amount <= 0) {
    $errors[] = 'Podaj poprawną kwotę kredytu.';
}

if ($interest_rate === "" || !is_numeric($interest_rate) || $interest_rate <= 0) {
    $errors[] = 'Podaj poprawne oprocentowanie.';
}

if ($years === "" || !is_numeric($years) || $years <= 0) {
    $errors[] = 'Podaj poprawną liczbę lat.';
}

// Obliczanie miesięcznej raty, jeśli nie ma błędów
if (empty($errors)) {
    $loan_amount = floatval($loan_amount);
    $interest_rate = floatval($interest_rate) / 100; // procent na ułamek
    $months = intval($years) * 12;

    // Raty równe (annuitetowe)
    $monthly_rate = $interest_rate / 12;
    $result = ($loan_amount * $monthly_rate) / (1 - pow(1 + $monthly_rate, -$months));
}

// Wywołanie widoku
include 'calc_view.php';
