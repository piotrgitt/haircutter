<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-18 17:21:12
  from 'C:\xampp\htdocs\haircutter\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602e93f882da70_71489583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96dd745b7363fe9c17acdd622c58f070ca301e26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\templates\\main.tpl',
      1 => 1613059539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602e93f882da70_71489583 (Smarty_Internal_Template $_smarty_tpl) {
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
         <link rel="stylesheet"   href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
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
my_reservations">Moje wizyty</a></li>
                                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" class="button primary">Zarejestruj się</a></li>
						</ul>
					</nav>
				</header>
                        <!-- content -->    
                                <div class="content">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1936404330602e93f86fc608_42606932', 'content');
?>

                                </div>  
                                
                        <!-- Messages -->           
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1030241685602e93f86fdc42_78236274', 'messages');
?>
             
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
                 </div>           
	</body>
</html><?php }
/* {block 'content'} */
class Block_1936404330602e93f86fc608_42606932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1936404330602e93f86fc608_42606932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_1030241685602e93f86fdc42_78236274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1030241685602e93f86fdc42_78236274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                                <div class="messages bottom-margin">
                                        <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                        <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                </div>
                                <?php }?>

                                <?php
}
}
/* {/block 'messages'} */
}
