<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-31 20:19:07
  from 'C:\xampp\htdocs\haircutter\app\views\reservation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601702abdd1810_32057483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22cc497490fb5497a136866ec9139d15738e7052' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\reservation.tpl',
      1 => 1612120746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601702abdd1810_32057483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1045511441601702abdd0dd4_63776455', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1045511441601702abdd0dd4_63776455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1045511441601702abdd0dd4_63776455',
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
            <hr>

            
            
            
            
            <section>
                <form method="post" action="#">
                    <!-- Table -->
                 
                    <div class="table-wrapper">
                            <table>
                                    <thead>
                                            <tr>
                                                    <th>Usługa</th>
                                                    <th>Czas trwania</th>
                                                    <th>Koszt</th>
                                                    <th>Check box</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                    <td>Item 1</td>
                                                    <td>Ante turpis integer aliquet porttitor.</td>
                                                    <td>29.99</td>
                                                    <td> <div class="col-6 col-12-medium">
                                                            <input type="checkbox" id="x1" name="x1">
                                                            <label for="x1"> </label></div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                    <td>Item 2</td>
                                                    <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                    <td>19.99</td>
                                                    <td> <div class="col-6 col-12-medium">
                                                            <input type="checkbox" id="x2" name="x2">
                                                            <label for="x2"> </label></div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                    <td>Item 3</td>
                                                    <td> Morbi faucibus arcu accumsan lorem.</td>
                                                    <td>29.99</td>
                                                    <td> <div class="col-6 col-12-medium">
                                                            <input type="checkbox" id="x3" name="x3">
                                                            <label for="x3"> </label></div>
                                                    </td>
                                            </tr>
                                            
                                    </tbody>
                                    <tfoot>
                                            <tr>
                                                    <td colspan="2"></td>
                                                    <td>100.00</td>
                                            </tr>
                                    </tfoot>
                            </table>
                    </div>
                    
                    
                   
                                  
                    

                    
                    
                </form>
        </section>
            
        <!-- PRETTY DATE PICKER -->
               
           
         <label for="meeting-time">Wybierz datę i godzinę rezerwacji:</label>

        <input style="color: black; width: 12em" type="datetime-local" id="meeting-time"
               name="meeting-time" value="2018-06-12T19:30"
               min="2021-02-01T00:00" max="2022-06-14T00:00">
   
        <hr>
        
        
        <div class="col-12">
                <ul class="actions">
                        <li><input type="submit" value="rezerwuj termin" class="primary" /></li>
                </ul>
        </div>
        


                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
