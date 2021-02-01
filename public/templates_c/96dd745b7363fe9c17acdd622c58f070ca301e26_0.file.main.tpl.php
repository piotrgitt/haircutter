<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-31 20:13:42
  from 'C:\xampp\htdocs\haircutter\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601701665069d4_77995101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96dd745b7363fe9c17acdd622c58f070ca301e26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\templates\\main.tpl',
      1 => 1612120420,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601701665069d4_77995101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Haircutter</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../lib/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../lib/simplepicker/dist/simplepicker.css">
        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../lib/assets/css/noscript.css" /></noscript>

	</head>
        
	<body class="is-preload landing">
		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.html">Haircutter</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_front_page">Strona główna</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
services">Usługi</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gallery">Galeria</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
pricing">Cennik</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
contact">Kontakt</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation">Zaplanuj wizytę</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" class="button primary">Zarejestruj się</a></li>
						</ul>
					</nav>
				</header>
                        <!-- content -->    
                                <div class="content">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197412307060170166505048_59605120', 'content');
?>

                                </div>                                   
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Piotr Herdzina. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>
                        <!-- The Modal -->
                    
		</div>
		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../lib/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_197412307060170166505048_59605120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197412307060170166505048_59605120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
