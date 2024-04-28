{extends file="main.tpl"}

{block name=top}
<!-- Header -->
		<header id="header">
			<a href="{$conf->action_url}calcShow" class="logo"><strong>Kalkulator</strong> <span>kredytowy</span></a>
			<a href="{$conf->action_url}operationList" style="padding:0 1.5em">Poprzednie wyniki</a>
			<a href="{$conf->action_url}logout" style="padding:0 1.5em">wyloguj</a>
		</header>

		
<h2>Kalkulator kredytowy</h2>


<div>
	<form action="{$conf->action_url}calcCompute" method="post">
		<fieldset>
			<label for="id_kwota">Podaj kwotę:</label>
			<input id="id_kwota" type="text" placeholder="wartość kwoty" name="kwota" value="{$form->kwota}">
			<label for="id_years">Podaj ilość lat:</label>
			<input id="id_years" type="text" placeholder="liczba lat" name="years" value="{$form->years}">
			<label for="id_proc">Podaj oprocentowanie:</label>
			<input id="id_proc" type="text" placeholder="wartość oprocentowania" name="proc" value="{$form->proc}">
			<label for="id_numer">Podaj numer telefonu:</label>
			<input id="id_numer" type="text" placeholder="+48XXXXXXXXX" name="numer" value="{$form->numer}">
			<br>
			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>
	<div style="display:flex; justify-content:space-between">
	{include file='messages.tpl'}
		<div style="padding:0 1.5em">
			{if isset($result->res)}
				<h4>Wynik</h4>
				<p>
					{$result->res}
				</p>
			{/if}
		</div>
	</div>


{/block}