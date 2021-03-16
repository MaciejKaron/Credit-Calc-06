<?php
/* Smarty version 3.1.39, created on 2021-03-16 08:47:14
  from 'C:\xampp\htdocs\Credit-Calc-06\app\calc\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60506282499699_68107676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57a1b23e9dd146cb6ee4c501b4d3625f80747278' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Credit-Calc-06\\app\\calc\\calc_view.tpl',
      1 => 1615880812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60506282499699_68107676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14781675456050628248ead7_01404730', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'content'} */
class Block_14781675456050628248ead7_01404730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14781675456050628248ead7_01404730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<h2 class="content-head is-center">Credit Calculator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
CalcCompute" method="post">
			<label for="id_amount">Amount:</label>
			<input id="id_amount" type="text" placeholder="AMOUNT" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" >		
			<label for="id_years">Years</label>
			<input id="id_years" type="text" placeholder="YEARS" name="years" value="<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
" >
			<label for="id_percentages">Percentages:</label>
			<input id="id_percentages" type="text" placeholder="PERCENTAGES" name="percentages" value="<?php echo $_smarty_tpl->tpl_vars['percentages']->value;?>
" >
			<button class="pure-button" type="submit">Calculate</button>
		</form>
		</div>

<div class="l-box-lrg pure-u-1-2">




<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>



<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
