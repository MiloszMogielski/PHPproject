{extends file="../../templates/main.tpl"}

{block name=content}
	<form action="{$app_url}/app/calc.php" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" placeholder="username" value="{$form['login']|default:''}">
			</div>
			<div class="field">
				<label for="id_pass">pass: </label>
				<input id="id_pass" type="password" name="pass" placeholder="password">
			</div>
		</div>
		<div class="submit-button">
			<input type="submit" value="zaloguj" class="primary">
		</div>
	</form>
	<div class="messages">
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
	</div>
{/block}