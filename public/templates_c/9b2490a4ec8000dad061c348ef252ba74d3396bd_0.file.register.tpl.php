<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-01 16:29:05
  from 'C:\xampp\htdocs\haircutter\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603d084132ae28_31766491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b2490a4ec8000dad061c348ef252ba74d3396bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\register.tpl',
      1 => 1614612544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603d084132ae28_31766491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['role']->value == "user") {?>
  <?php $_smarty_tpl->_assignInScope('template', 'main_user_login.tpl');
} elseif ($_smarty_tpl->tpl_vars['role']->value == "root") {?>
  <?php $_smarty_tpl->_assignInScope('template', 'main_admin_login.tpl');
} else { ?>
   <?php $_smarty_tpl->_assignInScope('template', 'main.tpl');?> 
<?php }?>
 



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194794318603d08413269c0_86738305', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value);
}
/* {block 'content'} */
class Block_194794318603d08413269c0_86738305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194794318603d08413269c0_86738305',
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
register">
                        <div class="row gtr-uniform gtr-50">

                                
                                <section id="five" class="wrapper style special fade">
                                    <div class="container">
                                        <header>
                                            <div style="max-width: 35%;margin-left: 32.5%">
                                            <ul class="actions stacked" >
                                                    <li><input type="text" name="login" id="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
" placeholder="Login" /></li>
                                                    <li><input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="Imię" /></li>
                                                    <li><input type="email" name="e_mail" id="e_mail" value="<?php echo $_smarty_tpl->tpl_vars['e_mail']->value;?>
" placeholder="Email" /></li>
                                                    <li><input type="text" name="phone_number" id="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
" placeholder="+48" /></li>
                                                    <li><input type="password" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" placeholder="Hasło" /></li>
                                                    <li><input type="password" name="password_confirmation" id="password_confirmation" value="<?php echo $_smarty_tpl->tpl_vars['password_confirmation']->value;?>
" placeholder="Powtórz hasło" /></li>
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
