{extends file="main.tpl"}
{block name=top}

<header id="header">
	<a href="{$conf->action_url}calcShow" class="logo"><strong>Kalkulator</strong> <span>kredytowy</span></a>
	<a href="{$conf->action_url}operationList" style="padding:0 1.5em">Poprzednie wyniki</a>
	<a href="{$conf->action_url}logout" style="padding:0 1.5em">wyloguj</a>
</header>


<div class="bottom-margin">
<form action="{$conf->action_url}operationList" method="post">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
    <div style="display:flex; justify-content:space-between">
		<input type="text" placeholder="Numer telefonu" name="search_number" value="{$searchForm->phoneNumber}" /><br />
		<button type="submit" >Szukaj</button>
    </div>
	</fieldset>
</form>

<form action="{$conf->action_url}operationList" method="post">
	<legend>Opcje sortowania</legend>
	<fieldset>
    <div style="display:flex; justify-content:space-between">
		<select name="sort_type">
            <option value="id_wynik" {if $sort_type == 'id_wynik'}selected{/if}>Id_wynik</option>
            <option value="kwota" {if $sort_type == 'kwota'}selected{/if}>Kwota</option>
            <option value="years" {if $sort_type == 'years'}selected{/if}>Years</option>
            <option value="procent" {if $sort_type == 'procent'}selected{/if}>Procent</option>
            <option value="wynik" {if $sort_type == 'wynik'}selected{/if}>Wynik</option>
            <option value="data" {if $sort_type == 'data'}selected{/if}>Data</option>
            <option value="phone" {if $sort_type == 'phone'}selected{/if}>Phone</option>
        </select>
        <select name="sort_updown">
            <option value="ASC" {if $sort_updown == 'ASC'}selected{/if}>Rosnąco</option>
            <option value="DESC" {if $sort_updown == 'DESC'}selected{/if}>Malejąco</option>
        </select>
		<button type="submit" >Sortuj</button>
    </div>
	</fieldset>
</form>

</div>

{/block}
{block name=bottom}


<table>
    <tr>
        <th>Id_wynik</th>
        <th>Kwota</th>
        <th>Years</th>
        <th>Procent</th>
        <th>Wynik</th>
        <th>Data</th>
        <th>Phone</th>
    <tr>
    {foreach $operations as $op}
    {strip}
        <tr>
            <td>{$op["id_wynik"]}</td>
            <td>{$op["kwota"]}</td>
            <td>{$op["years"]}</td>
            <td>{$op["procent"]}</td>
            <td>{$op["wynik"]}</td>
            <td>{$op["data"]}</td>
            <td>{$op["phone"]}</td>
            <td>
                <a href="{$conf->action_url}operationDelete&id={$op['id_wynik']}">Usuń</a>
            </td>
        </tr>
    {/strip}
    {/foreach}
</table>
{/block}