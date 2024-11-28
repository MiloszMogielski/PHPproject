<?php
require_once dirname(__FILE__).'/../../config.php';
include _ROOT_PATH.'/templates/top.php'; 
?>

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
  <legend>Logowanie</legend>
  <fieldset>
    <label for="id_login">login: </label>
    <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>">
    <label for="id_pass">pass: </label>
    <input id="id_pass" type="password" name="pass">
  </fieldset>
  <input type="submit" value="zaloguj" class="pure-button pure-button-primary">
</form>

<?php
// Wyświeltenie listy błędów, jeśli istnieją
if(isset($messages)) {
  if(count($messages) > 0) {
    echo '<h4> Wystąpiły błędy: </h4>';
    echo '<ol class="err">';
    foreach($messages as $key => $msg) {
      echo '<li>'.$msg.'</li>';
    }
    echo '</ol>';
  }
}
?>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>
  