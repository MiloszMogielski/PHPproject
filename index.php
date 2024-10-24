<?php
require_once 'config.php'; // Wczytanie konfiguracji

session_start(); // Rozpoczęcie sesji

// Sprawdzenie roli użytkownika
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// Przekierowanie do kalkulatora lub strony logowania
if ($role) {
    header("Location: " . _APP_URL . "/app/calc.php"); // Przekierowanie do kalkulatora
} else {
    header("Location: " . _APP_URL . "/app/security/login.php"); // Przekierowanie do logowania
}
exit();
