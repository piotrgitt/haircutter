<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-12 16:42:00
  from 'C:\xampp\htdocs\haircutter\app\views\all_reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61659eb8813a31_35746179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b407db74d7ecb255da7937baacb47c1cc42f7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\all_reservations.tpl',
      1 => 1634049718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:all_reservations_table.tpl' => 1,
  ),
),false)) {
function content_61659eb8813a31_35746179 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65737421961659eb8805e03_31492344', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_65737421961659eb8805e03_31492344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65737421961659eb8805e03_31492344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            
            
            <h3>Wizyty w salonie</h3>
            <div class="bottom-margin">
            <form id="search-form" class="" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
all_reservations_table','table'); return false;">
            <fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
		<button type="submit" class="button">Filtruj</button>
            </fieldset>
</form>
</div>	

                        
            <div id="table">
                <?php $_smarty_tpl->_subTemplateRender("file:all_reservations_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
                                                       
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
