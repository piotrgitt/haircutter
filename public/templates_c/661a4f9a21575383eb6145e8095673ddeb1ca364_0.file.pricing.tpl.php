<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-28 14:16:08
  from 'C:\xampp\htdocs\haircutter\app\views\pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603b9798c18bd4_79434766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '661a4f9a21575383eb6145e8095673ddeb1ca364' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\pricing.tpl',
      1 => 1614518144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603b9798c18bd4_79434766 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_223033609603b9798c17f51_46826316', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_223033609603b9798c17f51_46826316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_223033609603b9798c17f51_46826316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Cennik</h2>
                </header>  
                <!-- Strzyżenie -->
                <section>
                        <header class="minor">
                                <h2>Strzyżenie</h2>
                        </header>  
                    
                    
                        <div class="table-wrapper">
                                <table>
                                        <thead>
                                                <tr>
                                                      
                                                        <th>Description</th>
                                                        <th>Krótkie włosy</th>
                                                        <th>Włosy średnie </th>
                                                        <th>Długie włosy</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                       
                                                        <td>Strzyżenie męskie (mycie, strzyżenie, modelowanie)</td>
                                                        <td>50zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                <tr>
           
                                                        <td>Strzyżenie damskie (mycie, strzyżenie, modelowanie)</td>
                                                        <td>65zł</td>
                                                        <td>75zł</td>
                                                        <td>85zł</td>
                                                </tr>
                                                <tr>

                                                        <td>Strzyżenie dzieci do lat 10</td>
                                                        <td>40zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                <tr>
          
                                                        <td>Strzyżenie Hair Tattoo</td>
                                                        <td>50zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                <tr>
                 
                                                        <td>Modelowanie damskie (mycie, modelowanie)</td>
                                                        <td>45zł</td>
                                                        <td>55</td>
                                                        <td>65</td>
                                                </tr>
                                                <tr>
                 
                                                        <td>Modelowanie męskie (mycie, modelowanie)</td>
                                                        <td>25zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                                
                                                <tr>
                 
                                                        <td>Broda (strzyżenie, trymowanie brody, golenie maszynką)</td>
                                                        <td>30zł</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                </tr>
                                        </tbody>

                                </table>
                        </div>
     
                </section> 
                <hr />
                
                
                <!-- koloryzacja -->
                        <header class="minor">
                                <h2>Koloryzacja</h2>
                        </header>  
                    
                    
                        <div class="table-wrapper">
                                <table>
                                        <thead>
                                                <tr>
                                                      
                                                        <th>Description</th>
                                                        <th>Krótkie włosy</th>
                                                        <th>Włosy średnie </th>
                                                        <th>Długie włosy</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                       
                                                        <td>Koloryzacja jednolita (mycie, koloryzacja, strzyżenie, modelowanie)</td>
                                                        <td>160zł</td>
                                                        <td>185zł</td>
                                                        <td>215zł</td>
                                                </tr>
                                                <tr>
           
                                                        <td>Balayage (mycie, koloryzacja, strzyżenie, modelowanie)</td>
                                                        <td>190zł</td>
                                                        <td>210zł</td>
                                                        <td>250zł</td>
                                                </tr>
                                                <tr>

                                                        <td>Refleksy + koloryzacja (mycie, koloryzacja, strzyżenie, modelowanie)</td>
                                                        <td>190zł</td>
                                                        <td>210zł</td>
                                                        <td>250zł</td>
                                                </tr>
                                        </tbody>

                                </table>
                        </div>
     
                </section> 
                <hr />
                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
