<?php
require_once dirname(__FILE__).'/../../config.php';

session_start();
session_destroy(); // Zniszczenie sesji

header("Location: " . _APP_URL); // Przekierowanie na stronę główną
exit();
