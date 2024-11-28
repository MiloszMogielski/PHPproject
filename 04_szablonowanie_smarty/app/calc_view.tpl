{extends file="../templates/main.tpl"}

{block name=menu}
	<ul class="links">
		<li><a href="{$app_url}">Strona główna</a></li>
		<li><a href="https://github.com/MiloszMogielski" target="_blank">Repozytorium</a></li>
	</ul>
	<ul class="actions stacked">
		<li><a href="{$app_url}/app/security/logout.php" class="button fit">Wyloguj</a></li>
	</ul>
{/block}

{block name=content}
	<form action="{$app_url}/app/calc.php">
		<div class="fields">
			<div class="field">
				<label for="id_amount">Kwota [zł]:</label>
				<input id="id_amount" type="text" name="amount" value="{$form['amount']}">
			</div>
			<div class="field">
				<label for="id_years">Liczba lat kredytowania:</label>
				<input id="id_years" type="text" name="years" value="{$form['years']}">
			</div>
			<div class="field">
				<label for="id_interest">Oprocentowanie [%]:</label>
				<input id="id_interest" type="text" name="interestRate" value="{$form['interestRate']}">
			</div>
		</div>
		<div class="submit-button">
			<input type="submit" value="Oblicz" class="primary" />
		</div>
	</form>
	<div id="msgs" class="messages">
		{* Wyswieltenie listy bledow, jesli istnieja *}
		{if isset($messages)}
			{if count($messages) > 0}
				<p class="emoji">&#128531</p>
				<h4>Wystąpiły błędy:</h4>
				<ol class="err">
					{foreach $messages as $msg}
						{strip}
							<li>{$msg}</li>
						{/strip}
					{/foreach}
				</ol>
			{/if}
		{/if}
		{* Wyswietlanie wyniku, jesli wszystko ok *}
		{if isset($result)}
			<div class="result">
				<h4>Miesięczna rata wynosi:</h4>
				<p class="res">
					{$result} zł
				</p>
			</div>
		{/if}
	</div>
{/block}

