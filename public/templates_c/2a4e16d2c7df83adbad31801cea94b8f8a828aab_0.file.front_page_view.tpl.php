<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-01 16:10:03
  from 'C:\xampp\htdocs\haircutter\app\views\front_page_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603d03cb617385_01510501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a4e16d2c7df83adbad31801cea94b8f8a828aab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\front_page_view.tpl',
      1 => 1614611402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603d03cb617385_01510501 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1682608991603d03cb612936_58860044', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);
}
/* {block 'content'} */
class Block_1682608991603d03cb612936_58860044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1682608991603d03cb612936_58860044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <!-- Banner -->
        <section id="banner">
            
                <div class="content">
                    
                        <header>
                            
                                <h2>The Haircutter</h2>
                                <p>Piękno nie potrzebuje ozdoby, <br />
                                choć uwielbia towarzystwo sprawnego grzebienia</p>
                        </header>
                        <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/logo_resize.jpg" alt="" /></span>
                </div>

                <a href="#one" class="goto-next scrolly">Next</a>
        </section>

<!-- One -->
        <section id="one" class="spotlight style1 bottom">
                <span class="image fit main"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/front1.jpg" alt="" /></span>
                <div class="content">
                        <div class="container">
                                <div class="row">
                                        <div class="col-4 col-12-medium">
                                                <header>
                                                        <h2>Salon fryzjerski Haircutter</h2>
                                                        <p>Nasza oferta zawiera szeroką gamę zabiegów fryzjerskich. </p>
                                                </header>
                                        </div>
                                        <div class="col-4 col-12-medium">
                                                <p>Staramy się zapewnić profesjonalną obsługę, 
                                                    by nawet najbardziej wymagający klient wyszedł
                                                    zadowolony z naszego salonu. Do pracy używamy
                                                    wyłącznie profesjonalnych urządzeń i kosmetyków 
                                                    renomowanych firm.</p>
                                        </div>
                                        <div class="col-4 col-12-medium">
                                                <p>Miła i wykwalifikowana obsługa sprawi, że 
                                                    czas spędzony w naszym Salonie będzie chwilą relaksu,
                                                    odprężenia i prawdziwej przyjemności. </br> </br>
                                                    
                                                    Zapraszamy
                                                
                                                </p>
                                        </div>
                                </div>
                        </div>
                </div>
                <a href="#two" class="goto-next scrolly">Next</a>
        </section>

<!-- Two -->
        <section id="two" class="spotlight style2 right">
                <span class="image fit main"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/front2_cut.jpg" alt="" /></span>
                <div class="content">
                        <header>
                                <h2>Strzyżenie</h2>
                                <p style="font-size: medium"> DAMSKIE / MĘSKIE / DZIECI </p>
                        </header>
                        <p>Naszą podstawowa oferta to 
                            strzyżenie damskie i męskie.
                            W ramach usługi wykonujemy konsultację,
                            mycie szamponem pielęgnacyjnym, 
                            relaksujący masaż skóry głowy, precyzyjne
                            strzyżenie za pomocą nożyczek lub/i maszynki, 
                            modelowanie włosów.</p>
                        <ul class="actions">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
services" class="button">Dowiedz się więcej...</a></li>
                        </ul>
                </div>
                <a href="#three" class="goto-next scrolly">Next</a>
        </section>

<!-- Three -->
        <section id="three" class="spotlight style3 left">
                <span class="image fit main bottom"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/front3_cut.jpg" alt="" /></span>
                <div class="content">
                        <header>
                                <h2>Koloryzacja</h2>
                                <p style="font-size: medium"> COVER SIWYCH WŁOSÓW / ZMIANA KOLORU </p>
                        </header>
                        <p>Koloryzację włosów dedykujemy Paniom i Panom. 
                            Szczególnie dbamy o bezpieczeństwo naszych
                            klientów, dlatego farby, których używamy są
                            delikatne i dbają o zdrowy wygląd włosów.</p>
                        <ul class="actions">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
services" class="button">Dowiedz się więcej...</a></li>
                        </ul>
                </div>
                <a href="#four" class="goto-next scrolly">Next</a>
        </section>
                
<!-- four -->
        <section id="two" class="spotlight style2 right">
                <span class="image fit main"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/../images/front5_cut.jpg" alt="" /></span>
                <div class="content">
                        <header>
                                <h2>Pielęgnacja</h2>
                                <p style="font-size: medium"> REKONSTRUKCJA WŁOSA / KERATYNA / WYGŁADZANIE </p>
                        </header>
                        <p>Specjalne zabiegi, które służą regeneracji 
                            i pielęgnacji wszelkiego rodzaju włosów. 
                            Dla każdego problemu dobierany jest specjalny
                            produkt o dokładnie wyselekcjonowanych składnikach.</p>
                        <ul class="actions">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
services" class="button">Dowiedz się więcej...</a></li>
                        </ul>
                </div>
                <a href="#three" class="goto-next scrolly">Next</a>
        </section>


<!-- six -->
        <section id="five" class="wrapper style2 special fade">
                <div class="container">
                        <header>
                                <h2>Zaplanuj swoją wizytę!</h2>
                        </header>
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" class="cta">
                                <div class="row gtr-uniform gtr-50">
                                        <div class="col-4 col-12-xsmall"><input type="submit" value="Złóż rezerwację" class="fit primary" /></div>
                                </div>
                        </form>
                </div>
        </section>
<?php
}
}
/* {/block 'content'} */
}
