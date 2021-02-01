<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-31 18:08:16
  from 'C:\xampp\htdocs\haircutter\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6016e4008610d1_13540083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b2490a4ec8000dad061c348ef252ba74d3396bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\register.tpl',
      1 => 1612104709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6016e4008610d1_13540083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1501545796016e40085b502_06194126', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1501545796016e40085b502_06194126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1501545796016e40085b502_06194126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Rejestracja</h2>
                </header>  
        <header class="minor">
                        <h3>Zarejestruj się aby zarezerwować wizytę on-line!</h3>
                </header>  
            

        <!-- Register form -->       
        
        
        <section>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
zaloguj">
                        <div class="row gtr-uniform gtr-50">

                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <div style="max-width: 35%;margin-left: 32.5%">
                                            <ul class="actions stacked" >
                                                    <li><input type="text" name="name" id="name" value="" placeholder="Imię" /></li>
                                                    <li><input type="email" name="email" id="email" value="" placeholder="Email" /></li>
                                                    <li><input type="text" name="tel" id="tel" value="" placeholder="+48" /></li>
                                                    <li><input type="password" name="password" id="password" value="" placeholder="Hasło" /></li>
                                                    <li><input type="password" name="password2" id="password2" value="" placeholder="Powtórz hasło" /></li>
                                            </ul>
                                            </div>
                                        </header>

                                    </div>
                                </section>  
                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <ul class="actions stacked" >
                                                    <li><input  type="submit" value="Zarejestruj" class="primary" /></li>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
zaloguj">Masz już konto? Zaloguj się.</a></li>
                                            </ul>
                                        </header>

                                    </div>
                                </section>  
                            
                            

                                              
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
