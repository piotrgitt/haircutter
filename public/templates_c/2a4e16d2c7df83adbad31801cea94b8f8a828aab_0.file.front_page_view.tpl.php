<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-28 21:58:17
  from 'C:\xampp\htdocs\haircutter\app\views\front_page_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60132569419f05_68723387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a4e16d2c7df83adbad31801cea94b8f8a828aab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\haircutter\\app\\views\\front_page_view.tpl',
      1 => 1611867493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60132569419f05_68723387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16544945960132569413fb6_62585200', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_16544945960132569413fb6_62585200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16544945960132569413fb6_62585200',
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

<!-- five -->
        <section id="four" class="wrapper style1 special fade-up">
                <div class="container">
                        <header class="major">
                                <h2>Accumsan sed tempus adipiscing blandit</h2>
                                <p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
                        </header>
                        <div class="box alt">
                                <div class="row gtr-uniform">
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fa-chart-area"></span>
                                                <h3>Ipsum sed commodo</h3>
                                                <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fa-comment"></span>
                                                <h3>Eleifend lorem ornare</h3>
                                                <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fa-flask"></span>
                                                <h3>Cubilia cep lobortis</h3>
                                                <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fa-paper-plane"></span>
                                                <h3>Non semper interdum</h3>
                                                <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fa-file"></span>
                                                <h3>Odio laoreet accumsan</h3>
                                                <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                                        </section>
                                        <section class="col-4 col-6-medium col-12-xsmall">
                                                <span class="icon solid alt major fa-lock"></span>
                                                <h3>Massa arcu accumsan</h3>
                                                <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                                        </section>
                                </div>
                        </div>
                        <footer class="major">
                                <ul class="actions special">
                                        <li><a href="#" class="button">Magna sed feugiat</a></li>
                                </ul>
                        </footer>
                </div>
        </section>

<!-- six -->
        <section id="five" class="wrapper style2 special fade">
                <div class="container">
                        <header>
                                <h2>Magna faucibus lorem diam</h2>
                                <p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
                        </header>
                        <form method="post" action="#" class="cta">
                                <div class="row gtr-uniform gtr-50">
                                        <div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
                                        <div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
                                </div>
                        </form>
                </div>
        </section>
<?php
}
}
/* {/block 'content'} */
}
