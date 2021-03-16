<?php
/* Smarty version 3.1.39, created on 2021-03-09 10:43:06
  from 'C:\xampp\htdocs\Credit-Calc-smarty\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6047432aca4004_31518366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37593cb21fc325d72222e5d7667daa1c5103b245' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Credit-Calc-smarty\\app\\calc_view.tpl',
      1 => 1615282978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6047432aca4004_31518366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5582004836047432ac97702_85082022', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_5582004836047432ac97702_85082022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5582004836047432ac97702_85082022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<h2 class="content-head is-center">Credit Calculator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">
	<form class="pure-form pure-form-stacked" action="http://localhost/Credit-Calc-smarty/app/calc.php" method="post">
			<label for="id_amount">Amount:</label>
			<input id="id_amount" type="text" placeholder="AMOUNT" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
" >		
			<label for="id_years">Years</label>
			<input id="id_years" type="text" placeholder="YEARS" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
" >
			<label for="id_percentages">Percentages:</label>
			<input id="id_percentages" type="text" placeholder="PERCENTAGES" name="percentages" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['percentages'];?>
" >
			<button class="pure-button" type="submit">Calculate</button>
		</form>
		</div>

<div class="l-box-lrg pure-u-1-2">



<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
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
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
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
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
