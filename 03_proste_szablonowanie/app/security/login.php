<?php
require_once dirname(__FILE__).'/../../config.php';

// Pobranie parametrow
function getParamsLogin(&$form) {
  $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
  $form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

// Walidacja parametrow z przygotowaniem zmiennych dla widoku
function validateLogin(&$form, &$messages) {
  if(!(isset($form['login']) && isset($form['pass']))) {
    return false;
  }
  if($form['login'] == "") {
    $messages[] = "Nie podano loginu!";
  }
  if($form['pass'] == "") {
    $messages[] = "Nie podano hasla!";
  }

  if(count($messages) > 0) return false;

  if($form['login'] == "admin" && $form['pass'] == "admin") {
    session_start();
    $_SESSION['role'] = 'admin';
    return true;
  }
  if($form['login'] == "user" && $form['pass'] == "user") {
    session_start();
    $_SESSION['role'] = 'user';
    return true;
  }

  $messages[] = "Niepoprawny login lub haslo";
  return false;
}

$form = [];
$messages = [];
getParamsLogin($form);

if(!validateLogin($form, $messages)) {
  $page_title = "Kalkulator Kredytowy";
  $page_description = "Zaloguj się aby uzyskać dostęp do aplikacji";
  $page_footer = "Milosz Mogielski <br>Uniwersytet Śląski<br>WNST";
  include _ROOT_PATH.'/app/security/login_view.php';
} else {
  header("Location: "._APP_URL);
}