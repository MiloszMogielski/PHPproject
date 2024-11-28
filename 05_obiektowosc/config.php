<?php
require_once 'Config.class.php';
require_once 'lib/smarty/Smarty.class.php';

// Deklaracja stalych programowych
$conf = new Config();
$conf->server_name = 'localhost';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/05_obiektowosc';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);

// Wstepna konfiguracja Smarty
$smarty = new Smarty();
$smarty->assign('conf', $conf);
$smarty->assign('app_url', $conf->app_url);
$smarty->assign('root_path', $conf->root_path);
$smarty->assign('default_page_title', 'Kalkulator kredytowy');
$smarty->assign('default_page_description', 'Prosty kalkulator kredytowy');
?>

