<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
        <legend>Logowanie</legend>
        <fieldset>
            <label for="id_login">Login: </label>
            <input id="id_login" type="text" name="login" value="<?php out($form['login']) ?>" />
            <label for="id_pass">Hasło: </label>
            <input id="id_pass" type="password" name="pass" />
        </fieldset>    
        <input type="submit" value="Zaloguj" class="pure-button pure-button-primary" />
    </form>    

    <?php
    if (isset($messages) && count($messages) > 0) {
        echo '<ol style="padding: 10px; border-radius: 5px; background-color: #f88; width:25em;">';
        foreach ($messages as $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
    ?>

</div>

</body>
</html>
