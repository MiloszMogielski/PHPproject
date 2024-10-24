<?php require_once dirname(__FILE__) . '/../config.php'; ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator Kredytowy</title>
</head>
<body>

<form action="<?php echo APP_URL; ?>/app/calc.php" method="post">
    <label for="loan_amount">Kwota kredytu: </label>
    <input id="loan_amount" type="text" name="loan_amount" value="<?php echo htmlspecialchars($loan_amount); ?>" /><br />

    <label for="interest_rate">Oprocentowanie (w %): </label>
    <input id="interest_rate" type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>" /><br />

    <label for="years">Liczba lat: </label>
    <input id="years" type="text" name="years" value="<?php echo htmlspecialchars($years); ?>" /><br />

    <input type="submit" value="Oblicz" />
</form>

<?php
if (!empty($errors)) {
    echo '<ul style="background-color: #fdd; padding: 10px;">';
    foreach ($errors as $error) {
        echo '<li>' . htmlspecialchars($error) . '</li>';
    }
    echo '</ul>';
}
?>

<?php if (isset($result)) { ?>
    <div style="background-color: #dfd; padding: 10px;">
        <?php echo 'Miesięczna rata: ' . number_format($result, 2) . ' PLN'; ?>
    </div>
<?php } ?>

</body>
</html>
