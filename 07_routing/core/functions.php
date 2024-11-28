<?php

function getFrom(&$source, &$idx, &$required, &$required_msg) {
  if(isset($source[$idx])) {
    return $source[$idx];
  } else {
    if($required) {
      getMessages()->addError($required_msg);
      return null;
    }
  }
}

function getFromRequest($param_name, $required = false, $required_msg = null) { 
  return getFrom($_REQUEST, $param_name, $required, $required_msg);
}

function getFromGet($param_name, $required = false, $required_msg = null) { 
  return getFrom($_GET, $param_name, $required, $required_msg);
}

function getFromPost($param_name, $required = false, $required_msg = null) { 
  return getFrom($_POST, $param_name, $required, $required_msg);
}

function getFromCookies($param_name, $required = false, $required_msg = null) { 
  return getFrom($_COOKIE, $param_name, $required, $required_msg);
}

function getFromSession($param_name, $required = false, $required_msg = null) { 
  return getFrom($_SESSION, $param_name, $required, $required_msg);
}

function forwardTo($action_name) {
  getRouter()->setAction($action_name);
  include getConfig()->root_path."/ctrl.php";
  exit;
}

function redirectTo($action_name) {
  header("Location: ".getConfig()->action_url.$action_name);
  exit;
}

function addRole($role) {
  getConfig()->roles[$role] = true;
  $_SESSION['_roles'] = serialize(getConfig()->roles);
}

function inRole($role) {
  return isset(getConfig()->roles[$role]);
}

function debugToConsole($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
?>