<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 21:37:08
  from 'C:\xampp\htdocs\haircutter\app\views\my_reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60395bf4193813_61673792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a31d91782e51540a2728fcdf22071c35b4bc43cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\my_reservations.tpl',
      1 => 1614371801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60395bf4193813_61673792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php if ($_smarty_tpl->tpl_vars['role']->value == "user" || $_smarty_tpl->tpl_vars['role']->value == "root") {?>
  <?php $_smarty_tpl->_assignInScope('name', 'main_user_login.tpl');
} else { ?>
  <?php $_smarty_tpl->_assignInScope('name', 'main.tpl');
}?>
 



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25317195060395bf4180958_20336725', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_25317195060395bf4180958_20336725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25317195060395bf4180958_20336725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">

         

            <h3>Moje wizyty</h3>

            <section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delete_reservation" >

                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Data</th>
                                                    <th>Czas trwania</th>
                                                    <th>Anuluj rezerwacje</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservations']->value, 'reservation');
$_smarty_tpl->tpl_vars['reservation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->do_else = false;
?>
                                                <tr><td><?php echo $_smarty_tpl->tpl_vars['reservation']->value["service_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['reservation']->value["time"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['reservation']->value["service_time"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delete_reservation" class="button primary" value="<?php echo $_smarty_tpl->tpl_vars['reservation']->value["id_reservation"];?>
">Anuluj rezerwację</a></td></tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                    </tbody>
                            </table>      
                    </div>

                </form>
        </section>                                           
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
