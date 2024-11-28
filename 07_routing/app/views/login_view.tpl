{extends file="main.tpl"}

{block name=content}
	<form action="{$conf->action_url}login" method="post">
		<div class="fields">
			<div class="field">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" placeholder="username" value="{$form->login|default:''}">
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
	<div id="msgs" class="messages">
		{include file="messages.tpl"}
	</div>
{/block}