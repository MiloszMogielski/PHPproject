<?php
require_once dirname(__FILE__) . '/config.php';

// Przekierowanie przeglądarki klienta na stronę kalkulatora kredytowego
header("Location: " . APP_URL . "/app/calc.php");
exit();
