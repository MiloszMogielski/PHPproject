<?php
// Góra strony z szablonu
include _ROOT_PATH . '/templates/top.php';
?>

<h3>Kalkulator Kredytowy</h3>

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
    <fieldset>
        <label for="id_amount">Kwota kredytu (zł):</label>
        <input id="id_amount" type="text" name="amount" value="<?php out($form['amount']); ?>" placeholder="zł">

        <label for="id_interest">Oprocentowanie (% rocznie):</label>
        <input id="id_interest" type="text" name="interest" value="<?php out($form['interestRate']); ?>" placeholder="%">

        <label for="id_term">Okres kredytowania (lata):</label>
        <input id="id_term" type="text" name="term" value="<?php out($form['loanTerm']); ?>" placeholder="lata">
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz raty</button>
</form>

<div class="messages">

    <?php
    // Wyświetlenie listy błędów, jeśli istnieją
    if (isset($messages) && count($messages) > 0) {
        echo '<h4>Wystąpiły błędy:</h4>';
        echo '<ol style="padding: 10px; border-radius: 5px; background-color: #f88; width:25em;">';
        foreach ($messages as $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ol>';
    }
    ?>

    <?php
    // Wyświetlenie listy informacji, jeśli istnieją
    if (isset($infos) && count($infos) > 0) {
        echo '<h4>Informacje:</h4>';
        echo '<ol style="padding: 10px; border-radius: 5px; background-color: #def; width:25em;">';
        foreach ($infos as $info) {
            echo '<li>' . $info . '</li>';
        }
        echo '</ol>';
    }
    ?>

    <?php if (isset($result)) { ?>
        <h4>Wynik</h4>
        <div style="margin-top: 1em; padding: 1em; border-radius: 5px; background-color: #ff0; width:25em;">
            <?php echo 'Miesięczna rata: ' . number_format($result, 2) . ' zł'; ?>
        </div>
    <?php } ?>

</div>

<?php
// Dół strony z szablonu
include _ROOT_PATH . '/templates/bottom.php';
?>
