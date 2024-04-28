{block name=messages}
<div style="padding:0 1.5em">
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


<div style="padding:0 1.5em">
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
{/block}