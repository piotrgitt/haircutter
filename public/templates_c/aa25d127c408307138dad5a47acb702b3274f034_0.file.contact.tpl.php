<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-28 14:18:49
  from 'C:\xampp\htdocs\haircutter\app\views\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603b9839894ea1_13567377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa25d127c408307138dad5a47acb702b3274f034' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\contact.tpl',
      1 => 1614517040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603b9839894ea1_13567377 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1813422024603b9839890c17_21022421', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_1813422024603b9839890c17_21022421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1813422024603b9839890c17_21022421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
<div id="main" class="wrapper style1">
        <div class="container">
                <header class="major">
                        <h2>Kontakt</h2>
                </header>  
        <!-- MAPA Google --> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.6857342749176!2d21.01920621579605!3d52.21275827975725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccde106e1f83%3A0x7b9e8241aa4b1275!2sPu%C5%82awska+1%2C+00-001+Warszawa!5e0!3m2!1spl!2spl!4v1535123729732" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    
            
        
        
        <!-- concact -->                
        <section id="four" class="wrapper style1 special fade-up">
                <div class="container">

                        <div class="box alt">
                                <div class="row gtr-uniform">
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fas fa-map-marked-alt "></span>
                                                <h3>Znajdź nas</h3>
                                                <p>C.H. Agora Bytom (POZIOM -1)</p>
                                                <p> Pl. Kościuszki 1</p> 
                                                <p>41-902 Bytom</p> 
                                                <p>Zobacz na mapie</p> 
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fas fas fa-phone-alt"></span>
                                                <h3>Zadzwoń do nas</h3>
                                                <p>tel. (32) 643 23 12</p><br>
                                                <p>e-mail: info@renomee.bytom.pl</p><br>
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fas fa-clock"></span>
                                                <h3>Godziny otwarcia</h3>
                                                <p>PON - SOB 09:00 - 21:00</p>
                                                <p>NIEDZIELA 10:00 - 19:00</p>
                                        </section>

                                </div>
                        </div>
                        <footer class="major">
                                <ul class="actions special">
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="button">Zarezerwuj wizytę on-line!</a></li>
                                </ul>
                        </footer>
                </div>
        </section>

                                        
                                        
                                        
                                        
                                        
                        
        </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
