<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-12 14:19:52
  from 'C:\xampp\htdocs\haircutter\app\views\all_reservations_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61657d68b2e665_33420735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6137298138b74b4f9fa12286a57b7a22953787e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\all_reservations_table.tpl',
      1 => 1634040848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61657d68b2e665_33420735 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php }
}
