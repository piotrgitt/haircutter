<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-25 15:22:58
  from 'C:\xampp\htdocs\haircutter\app\views\my_reservations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6037b2c20088f4_53618552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a31d91782e51540a2728fcdf22071c35b4bc43cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\my_reservations.tpl',
      1 => 1614262590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6037b2c20088f4_53618552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_525396386037b2c1f3b684_98890734', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_525396386037b2c1f3b684_98890734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_525396386037b2c1f3b684_98890734',
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
process" >
                    <!-- Table -->
                    <fieldset>
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Data</th>
                                                    <th>Czas trwania</th>

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
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value["time"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value["duration"];?>
</td></tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                                    </tbody>
                            </table>
                                    
                                    
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
