{extends file="../../templates/main.tpl"}

{block name=content}



<h2 class="content-head is-center">Credit Calculator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">
	<form class="pure-form pure-form-stacked" action="{$conf->action_root}CalcCompute" method="post">
			<label for="id_amount">Amount:</label>
			<input id="id_amount" type="text" placeholder="AMOUNT" name="amount" value="{$amount}" >		
			<label for="id_years">Years</label>
			<input id="id_years" type="text" placeholder="YEARS" name="years" value="{$years}" >
			<label for="id_percentages">Percentages:</label>
			<input id="id_percentages" type="text" placeholder="PERCENTAGES" name="percentages" value="{$percentages}" >
			<button class="pure-button" type="submit">Calculate</button>
		</form>
		</div>

<div class="l-box-lrg pure-u-1-2">




{if $msgs->isError()}
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs->getErrors() as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}



{if $msgs->isInfo()}
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $msgs->getInfos() as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}


{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>

{/block}