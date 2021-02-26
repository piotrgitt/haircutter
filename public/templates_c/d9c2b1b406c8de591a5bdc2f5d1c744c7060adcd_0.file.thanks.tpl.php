<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 21:19:28
  from 'C:\xampp\htdocs\haircutter\app\views\thanks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603957d06adb59_79897457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9c2b1b406c8de591a5bdc2f5d1c744c7060adcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\thanks.tpl',
      1 => 1614370710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603957d06adb59_79897457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['role']->value == "user" || $_smarty_tpl->tpl_vars['role']->value == "root") {?>
  <?php $_smarty_tpl->_assignInScope('name', 'main_user_login.tpl');
} else { ?>
  <?php $_smarty_tpl->_assignInScope('name', 'main.tpl');
}?>
 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1131740803603957d06aacf4_66201946', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_1131740803603957d06aacf4_66201946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1131740803603957d06aacf4_66201946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Dziękujemy</h2>
            </header>
            <h3> Dziękujemy za złożenie rezerwacji. Powróć na stronę główną </h3>
            
            
            <hr>
            <div class="col-12">

                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_front_page" class="button primary">Strona główna</a>       
            </div>

                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
