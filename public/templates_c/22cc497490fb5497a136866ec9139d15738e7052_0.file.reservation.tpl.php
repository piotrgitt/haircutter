<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 21:18:41
  from 'C:\xampp\htdocs\haircutter\app\views\reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603957a1e486c3_80088479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22cc497490fb5497a136866ec9139d15738e7052' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\reservation.tpl',
      1 => 1614370683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603957a1e486c3_80088479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['role']->value == "user" || $_smarty_tpl->tpl_vars['role']->value == "root") {?>
  <?php $_smarty_tpl->_assignInScope('name', 'main_user_login.tpl');
} else { ?>
  <?php $_smarty_tpl->_assignInScope('name', 'main.tpl');
}?>
 


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55251625603957a1e39935_83700227', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_55251625603957a1e39935_83700227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_55251625603957a1e39935_83700227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                    <h2>Rezerwacja</h2>
            </header>  

            <h3>Wybierz usługę</h3>
            <section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
process" >
                    <!-- Table -->
                    <fieldset>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Cena</th>
                                                    <th>Czas trwania</th>
                                                    <th>hello</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                                <tr><td><?php echo $_smarty_tpl->tpl_vars['service']->value["service_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value["service_price"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value["service_time"];?>
</td><td><div class="pretty p-default p-round p-thick"><input type="radio" name="service" id="service" value="<?php echo $_smarty_tpl->tpl_vars['service']->value["id_service"];?>
" /><div class="state p-danger"><label> </label></div></div></td></tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                    </tbody>
                            </table>
                                    
                                    
                    </div>
                                    
                    <label for="meeting-time">Wybierz datę i godzinę rezerwacji:</label>

                    <input style="color: black; width: 12em" type="datetime-local" id="date_time"
                    name="date_time" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date_time;?>
"
                    min="2021-02-01T00:00" max="2022-06-14T00:00">      
                                    
                    </fieldset>
                      <hr>
                    <div class="col-12">
                            
                        <input type="submit" value="rezerwuj termin" class="primary" />
                   
                    </div>

                </form>
        </section>
            
        <!-- PRETTY DATE PICKER -->
               
           
         
   
      
        
        
        


                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
