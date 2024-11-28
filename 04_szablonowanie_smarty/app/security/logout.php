<?php
require_once dirname(__FILE__).'/../../config.php';

// Zakonczenie sesji
session_start();
session_destroy();

// Przekierowanie na strone glowna
header("Location: "._APP_URL);