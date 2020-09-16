<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-15 22:23:24
  from 'D:\Studia\PBaw_JPDSI\xampp\htdocs\smartyszablonowanie\app\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6122bc909422_72314800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b962d6263e047fee688d33a20edd229bff805959' => 
    array (
      0 => 'D:\\Studia\\PBaw_JPDSI\\xampp\\htdocs\\smartyszablonowanie\\app\\CalcView.tpl',
      1 => 1600201398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6122bc909422_72314800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951437545f6122bc8ab813_02254366', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18775112475f6122bc8b7396_36722944', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_1951437545f6122bc8ab813_02254366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1951437545f6122bc8ab813_02254366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Przykładowa treść stopki <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_18775112475f6122bc8b7396_36722944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18775112475f6122bc8b7396_36722944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    
<div class="inner">
	<header class="align-center">
            <div class="content">
		<h2 class="align-center">Oblicz swój podatek</h2>
                    <p>Wybierz rodzaj obliczeń:</p>
			<hr>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
                                <fieldset>
				<div class="field half first">
                                    <div class="4u">
					<input type="radio" id ="typPodatku2" name="typPodatku" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->typPodatku;?>
">
						<label for="typPodatku2">Brutto-netto</label>
                                    </div>
				</div>
				<div class="field half">
                                    <div class="4u$ 12u$(small)">
					<input type="radio" id ="typPodatku1" name="typPodatku" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->typPodatku;?>
">
					<label for="typPodatku1">Netto-brutto</label>
                                    </div>
				</div>
				<div class="field">
                                    <label for="id_x">Kwota przed obliczeniami: </label>
                                    <input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" placeholder="Wpisz kwotę: "><p>  </p>
                                    <label for="id_op">Podatek</label>
                                </div>
                                        <div class="select-wrapper">
                                            <select name="procent" id="procent">
                                                <option value="" style = "color:#6b6b6b;">- Oprocentowanie -</option>
                                                <option value="3" style = "color:#6b6b6b;">3%</option>
                                                <option value="5" style = "color:#6b6b6b;">5%</option>
                                                <option value="7" style = "color:#6b6b6b;">7%</option>
                                                <option value="8" style = "color:#6b6b6b;">8%</option>
                                                <option value="22" style = "color:#6b6b6b;">22%</option>
                                                <option value="23" style = "color:#6b6b6b;">23%</option>	
                                            </select>
                                        </div>
                                    </fieldset>
                                        <div>
                                            <p></p><p></p>
                                            <ul class="actions align-center">
                                            <li><input value="Oblicz!" class="button special" type="submit"></li>
                                            </ul>
                                        </div>
				</form>
				</div>
        </header>
</div>
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>  
    <ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }
if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<p>Sposób obliczania: <?php echo $_smarty_tpl->tpl_vars['form']->value->typ;?>
</p>
<p>Kwota przed konwersją: <?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
PLN</p>
<p>Stawka VAT: <?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
%</p>
<p>Obliczona kwota VAT: <?php echo $_smarty_tpl->tpl_vars['result']->value->kwotaVat;?>
 PLN</p>
<p>Obliczona kwota: <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
 PLN</p>
</div>
<?php }
}
}
/* {/block 'content'} */
}
