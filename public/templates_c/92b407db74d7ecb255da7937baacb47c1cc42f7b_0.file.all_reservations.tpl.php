<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-06 18:50:23
  from 'C:\xampp\htdocs\haircutter\app\views\all_reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_615dd3cf2ea3c8_99044517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b407db74d7ecb255da7937baacb47c1cc42f7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\all_reservations.tpl',
      1 => 1633538835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615dd3cf2ea3c8_99044517 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1305756477615dd3cf2dcc00_70307365', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_1305756477615dd3cf2dcc00_70307365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1305756477615dd3cf2dcc00_70307365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">

         

            <h3>Wizyty w salonie</h3>
            <form class="" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
all_reservations">
                <section>
                    <fieldset>
                        <input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
                        <button type="submit" class="button">Filtruj</button>
                    </fieldset>
                </section>
            </form>
                    <hr>        
            <section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delete_reservation" >
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Data i godzina</th>
                                                    <th>Czas trwania</th>
                                                    <th>Imię i nazwisko</th>
                                                    <th>Nr telefonu</th>
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
</td><td><?php echo $_smarty_tpl->tpl_vars['reservation']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['reservation']->value["phone_number"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
delete_admin_reservation/<?php echo $_smarty_tpl->tpl_vars['reservation']->value["id_reservation"];?>
" class="button" value="<?php echo $_smarty_tpl->tpl_vars['reservation']->value["id_reservation"];?>
" id="id_reservation" name="id_reservation" onclick="return confirm('Jesteś pewny, że chcesz usunąć rezerwację? ');"> Anuluj rezerwacje </a></td></tr>
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
