<?php
// Deklaracja stalych programowych
define('_SERVER_NAME', 'localhost');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/04_szablonowanie_smarty');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

// Wstepna konfiguracja Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('default_page_title', 'Kalkulator kredytowy');
$smarty->assign('default_page_description', 'Prosty kalkulator kredytowy');
?>

