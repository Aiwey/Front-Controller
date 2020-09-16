<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-15 22:11:39
  from 'D:\Studia\PBaw_JPDSI\xampp\htdocs\smartyszablonowanie\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f611ffb95a0a2_68738921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5a80bbc9f52979ca32c8de1ecf903cc0c3b7c3a' => 
    array (
      0 => 'D:\\Studia\\PBaw_JPDSI\\xampp\\htdocs\\smartyszablonowanie\\templates\\main.tpl',
      1 => 1600194261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f611ffb95a0a2_68738921 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="generic.html">Kalkulator</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
                                
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../index.php">Kalkulator</a></li>
                                </ul>
			</nav>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="image fit">
							<img src="images/pic01.jpg" alt="" />
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14691503075f611ffb956227_96325346', 'content');
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
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_14691503075f611ffb956227_96325346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14691503075f611ffb956227_96325346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .. <?php
}
}
/* {/block 'content'} */
}
