<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-16 12:41:50
  from 'C:\xampp\htdocs\smartyszablonowanie\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f61ebeecd31d6_85530454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32dff0bf00cca7ff58b08051c10e65dc75375557' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyszablonowanie\\templates\\main.tpl',
      1 => 1600252659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f61ebeecd31d6_85530454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<title>Kalkulator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Kalkulator</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
                                
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Kalkulator</a></li>
                                </ul>
			</nav>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="image fit">
							<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/pic01.jpg" alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>Kalkulator vat</h2>
								<p>policz go już <em>teraz</em>!</p>
							</header>
							<hr />
							</div>
					</div>
				</div>
			

		<!-- Four -->
			<section id="four" class="wrapper style3">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15799923575f61ebeecce7a5_35992688', 'content');
?>

			</section>
                        <section id ="three" class ="wrapper style2" style="margin: 0 auto">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19734448865f61ebeeccf249_69572018', 'infos');
?>

                        </section>
		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
						</div>
					</section>
					<div class="copyright">
						&copy; Kalkulator: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash, Freepic</a> Video <a href="http://coverr.co/">Coverr</a>.</br> Wykonanie: Ewa Zielonka.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_15799923575f61ebeecce7a5_35992688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15799923575f61ebeecce7a5_35992688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .. <?php
}
}
/* {/block 'content'} */
/* {block 'infos'} */
class Block_19734448865f61ebeeccf249_69572018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'infos' => 
  array (
    0 => 'Block_19734448865f61ebeeccf249_69572018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Informacje <?php
}
}
/* {/block 'infos'} */
}
