{extends file="main.tpl"}

{block name=footer}haha to sie nie wyswietli{/block}

{block name=content}

<h2>Kalkulator kredytowy</h2>

<div>
	<div>
		<form action="{$conf->action_url}CalcKred" method="post">
			<fieldset>
				<label for="id_kwota">Podaj kwotę:</label>
				<input id="id_kwota" type="text" placeholder="wartość kwoty" name="kwota" value="{$form->kwota}">
				<label for="id_years">Podaj ilość lat:</label>
				<input id="id_years" type="text" placeholder="liczba lat" name="years" value="{$form->years}">
				<label for="id_proc">Podaj oprocentowanie:</label>
				<input id="id_proc" type="text" placeholder="wartość oprocentowania" name="proc" value="{$form->proc}">
				<br>
				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div style="display:flex; justify-content:space-between">
		<div>
			{* wyświeltenie listy błędów, jeśli istnieją *}
			{if $messages->isErrors()}
			<h4>Wystąpiły błędy: </h4>
			<ol class="err">
				{foreach $messages->getErrors() as $msg}
				{strip}
				<li>{$msg}</li>
				{/strip}
				{/foreach}
			</ol>
			{/if}
		</div>


		<div>
			{* wyświeltenie listy informacji, jeśli istnieją *}
			{if $messages->isInfos()}
			<h4>Informacje: </h4>
			<ol>
				{foreach $messages->getInfos() as $msg}
				{strip}
				<li>{$msg}</li>
				{/strip}
				{/foreach}
			</ol>
			{/if}
		</div>

		<div>
			{if isset($result->res)}
			<h4>Wynik</h4>
			<p>
				{$result->res}
			</p>
			{/if}
		</div>

	</div>
</div>

{/block}