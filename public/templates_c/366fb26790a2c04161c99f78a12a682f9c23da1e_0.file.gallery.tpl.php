<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-28 21:35:11
  from 'C:\xampp\htdocs\haircutter\app\views\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60131fff27ecd6_51726664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366fb26790a2c04161c99f78a12a682f9c23da1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\gallery.tpl',
      1 => 1611866106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60131fff27ecd6_51726664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71091516760131fff27a249_91322222', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_71091516760131fff27a249_91322222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_71091516760131fff27a249_91322222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Galeria</h2>
                </header>
                <!-- Image -->
                    <section>
                            <h3>Galeria</h3>
                            <h4>Fit</h4>
                            <div class="box alt">
                                    <div class="row gtr-50 gtr-uniform">
                                            <div class="col-12"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal5.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal1.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal2.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal3.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal4.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/services_4_cut.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/gal6.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/services_2.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/front_3_cut.jpg" alt="" /></span></div>
                                            <div class="col-4 col-6-xsmall"><span class="image fit"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/front5_cut.jpg" alt="" /></span></div>
          
                                    </div>
                            </div>
                    </section>
                                                
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}