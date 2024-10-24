<?php
define('_SERVER_NAME', 'localhost:80'); // Ustawienie serwera na localhost na porcie 80
define('_SERVER_URL', 'http://' . _SERVER_NAME); // Ustawienie URL serwera
define('_APP_ROOT', '/PhpProject1'); // Ustawienie katalogu aplikacji
define('_APP_URL', _SERVER_URL . _APP_ROOT); // Ustawienie URL aplikacji
define('_ROOT_PATH', dirname(__FILE__)); // Ustawienie ścieżki do katalogu głównego aplikacji

function out(&$param) {
    if (isset($param)) {
        echo $param;
    }
}
?>
