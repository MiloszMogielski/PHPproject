<?php
require_once dirname(__FILE__) .'/../config.php';
include _ROOT_PATH.'/templates/top.php'; 
?>

<div class="logout">
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<h3>Wprowadź dane</h3>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<fieldset>
		<label for="id_amount">Podaj kwotę [zł]: </label>
		<input id="id_amount" type="text" name="amount" value="<?php out($form['amount']); ?>">
		<label for="id_years">Podaj liczbę lat kredytowania: </label>
		<input id="id_years" type="text" name="years" value="<?php out($form['years']); ?>">
		<label for="id_interest">Podaj oprocentowanie [%]: </label>
		<input id="id_interest" type="text" name="interestRate" value="<?php out($form['interestRate']); ?>">
	</fieldset>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary">
</form>	

<?php
// Wyswieltenie listy bledow, jesli istnieja
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

<?php if (isset($monthlyPayment)){ ?>
	<h4>Miesięczna rata wynosi:</h4>
	<p class="res">
<?php echo "$monthlyPayment zł" ?>
	</p>
<?php 
} ?>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>
