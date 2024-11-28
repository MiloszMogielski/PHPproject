<?php
require_once 'init.php';

$router = getRouter();

$router->setDefaultRoute('calcShow');
$router->setNoroleRoute('login');
$router->addRoute('calcShow', 'CalcCtrl', ['user', 'admin']);
$router->addRoute('calcCompute', 'CalcCtrl', ['user', 'admin']);
$router->addRoute('login', 'LoginCtrl');
$router->addRoute('logout', 'LoginCtrl', ['user', 'admin']);

$router->go();
?>