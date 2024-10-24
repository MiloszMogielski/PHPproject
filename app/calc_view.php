<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/inne_chronione.php" class="pure-button">Inna chroniona strona</a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
    <form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
        <legend>Kalkulator Kredytowy</legend>
        <fieldset>
            <label for="id_amount">Kwota kredytu: </label>
            <input id="id_amount" type="text" name="amount" value="<?php out($amount) ?>" />
            <label for="id_interest">Oprocentowanie (% rocznie): </label>
            <input id="id_interest" type="text" name="interest" value="<?php out($interestRate) ?>" />
            <label for="id_term">Okres kredytowania (lata): </label>
            <input id="id_term" type="text" name="term" value="<?php out($loanTerm) ?>" />
        </fieldset>    
        <input type="submit" value="Oblicz raty" class="pure-button pure-button-primary" />
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

    <?php if (isset($result)): ?>
    <div style="margin-top: 1em; padding: 1em; border-radius: 5px; background-color: #ff0; width:25em;">
        <?php echo 'Miesięczna rata: ' . number_format($result, 2) . ' zł'; ?>
    </div>
    <?php endif; ?>
</div>

</body>
</html>
