<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-28 14:16:01
  from 'C:\xampp\htdocs\haircutter\app\views\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603b9791346cc9_87700949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366fb26790a2c04161c99f78a12a682f9c23da1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\gallery.tpl',
      1 => 1614518133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603b9791346cc9_87700949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['role']->value == "user") {?>
  <?php $_smarty_tpl->_assignInScope('name', 'main_user_login.tpl');
} elseif ($_smarty_tpl->tpl_vars['role']->value == "root") {?>
  <?php $_smarty_tpl->_assignInScope('name', 'main_admin_login.tpl');
} else { ?>
   <?php $_smarty_tpl->_assignInScope('name', 'main.tpl');?> 
<?php }?>
 



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1724413173603b97913437e5_39059560', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_1724413173603b97913437e5_39059560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1724413173603b97913437e5_39059560',
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
