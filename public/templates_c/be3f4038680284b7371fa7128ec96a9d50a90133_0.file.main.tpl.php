<?php
/* Smarty version 3.1.39, created on 2021-09-22 19:46:51
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b6c0b2ae9f6_63647728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be3f4038680284b7371fa7128ec96a9d50a90133' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\templates\\main.tpl',
      1 => 1632332808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b6c0b2ae9f6_63647728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
        Editorial by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>ElectroWorld</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/fontawesome.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/solid.css" />
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
            <div id="main">
                <div class="inner">

                    <!-- Header -->
                    <header id="header">
                        <div class="row">
                            <div class="col-2 col-12-small">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shopShow" class="logo"><strong>ElectroWorld</strong></a>
                            </div>
                            <div class="col-4 col-12-small">
                                <section id="search" class="alt">
                                    <form method="post" id="search-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search">
                                        <input type="text" name="sf_query" placeholder="Wpisz czego poszukujesz..." value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['searchForm']->value->query)===null||$tmp==='' ? '' : $tmp);?>
"/>
                                    </form>
                                    <style>
                                        #search-form{
                                            border: 2px solid #f56a6a;
                                            border-radius: 8px;
                                        }
                                    </style>
                                </section>
                            </div>
                            <div class="col-4 col-12-small" align="center">
                                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                                    <p>Użytkownik:<br><em style="color:#f56a6a;"><?php echo (($tmp = @\core\SessionUtils::load($_smarty_tpl->tpl_vars['log']->value,true))===null||$tmp==='' ? '' : $tmp);?>
</em></p>
                                <?php } else { ?>
                                <?php }?>
                            </div>
                            <div class="col-2 col-12-small" align="right">
                                <ul class="actions">
                                    <li>
                                        <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button primary icon solid fa-sign-out-alt" onclick="info()">Wyloguj</a>
                                        <?php } else { ?>	
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button icon solid fa-sign-in-alt">Logowanie</a>
                                        <?php }?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1933136383614b6c0b2992f6_69842302', 'content');
?>

                
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214162950614b6c0b2999e4_16881819', 'messages');
?>


            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shopShow" class="icon solid fa-home"> Strona główna</a></li>
                        <li>
                            <span class="opener">Arduino</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/arduino-moduly-glowne">Arduino - moduły główne</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/arduino-shield">Arduino Shield - rozszerzenia</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/arduino-ksiazki">Książki o Arduino</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/arduino-obudowy">Obudowy</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/arduino-zasilanie">Zasilanie</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Mikrokontrolery AVR</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/uc-avr-attiny">ATtiny</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/uc-avr-atmega">ATmega</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/uc-avr-ksiazki">Książki o AVR</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Czujniki</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/czujniki-temperatury">Czujniki temperatury</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/czujniki-wilgotnosci">Czujniki wilgotności</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/czujniki-cisnienia">Czujniki ciśnienia</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Serwomechanizmy</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/serwa-micro">Serwa typu micro</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/serwa-medium">Serwa typu medium</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/serwa-standard">Serwa typu standard</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/serwa-akcesoria">Akcesoria do serw</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Silniki elektryczne</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/silniki-bez-przekladni">Silniki bez przekładni</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/silniki-z-przekladnia">Silniki z przekładnią</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/silniki-krokowe">Silniki krokowe</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/silniki-wibracyjne">Silniki wibracyjne</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/silniki-pompy">Pompy wodne</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Elementy pasywne</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/elem-pas-rezystory">Rezystory</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/elem-pas-kondensatory">Kondensatory</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/elem-pas-dlawiki">Dławiki</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/elem-pas-bezpieczniki">Bezpieczniki</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/elem-pas-potencjometry">Potencjometry</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/elem-pas-magnesy">Magnesy</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Diody</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/diody-led">Diody LED</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/diody-prostownicze">Diody prostownicze</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/diody-zenera">Diody Zenera</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/diody-schottky">Diody Schottky</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/diody-paski-ledowe">Paski ledowe</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Wyświetlacze i ekrany</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze-lcd">Wyświetlacze LCD</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze-tft">Wyświetlacze TFT</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze-ips">Wyświetlacze IPS</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze-oled">Wyświetlacze OLED</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze-e-paper">Wyświetlacze e-paper</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze-segmentowe">Wyświetlacze segmentowe</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze-matryce-led">Matryce LED</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Druk 3D</span>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/druk3d-drukarki">Drukarki 3D</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/druk3d-filamenty">Filamenty</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/druk3d-piora3d">Pióra 3D</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/druk3d-akcesoria">Akcesoria</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/druk3d-czesci-zamienne">Części zamienne</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cartShow" class="pure-menu-heading pure-menu-link icon solid fa-shopping-cart"> Koszyk (<?php echo number_format($_smarty_tpl->tpl_vars['cartValue']->value,2,',',' ');?>
 zł)</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
accountShow" class="pure-menu-heading pure-menu-link icon solid fa-user"> Konto (<?php echo (($tmp = @\core\SessionUtils::load($_smarty_tpl->tpl_vars['log']->value,true))===null||$tmp==='' ? '' : $tmp);?>
)</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link icon solid fa-sign-out-alt" onclick="info()"> Wyloguj</a>
                            <?php } else { ?>	
                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link icon solid fa-sign-in-alt"> Logowanie</a>
                            <?php }?>
                        </li>
                    </ul>
                </nav>
                <?php echo '<script'; ?>
>
                    function info(){
                        alert("Poprawnie wylogowano.");
                    }
                <?php echo '</script'; ?>
>
                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Dlaczego warto u nas kupować:</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/spec-of.jpg" alt="" /></a>
                            <p>Liczne promocje, rabaty dla stałych klientów i sezonowe wyprzedaże.</p>
                        </article>
                        <article>
                            <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/gwarancja.jpg" alt="" /></a>
                            <p>Gwarancja najwyższej jakości oferowanych przez nas produktów.</p>
                        </article>
                        <article>
                            <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/gratis.jpg" alt="" /></a>
                            <p>Szybka i darmowa dostawa dla zamówień powyżej 300zł.</p>
                        </article>
                    </div>
                </section>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Kontakt</h2>
                    </header>
                    <ul class="contact">
                        <li class="icon solid fa-envelope">info@electroworld.com.pl</li>
                        <li class="icon solid fa-phone">+48 85 837 43 23</li>
                        <li class="icon solid fa-home">ElectroWorld<br />
                            Grodziecka 2b<br />
                            41-250 Czeladź<br />
                            Polska<br /><br />
                            <a href="https://www.google.pl/maps/place/Grodziecka+2b,+41-250+Czeladź" target="_blank">Pokaż na mapie</a></li>
                        <li class="icon solid fa-clock">Godziny pracy sklepu stacjonarnego:<br />
                            pon-pt: 8:00 - 16:00<br />
                            sobota: 10:00 - 14:00<br />
                            niedziela: nieczynne</li>
                    </ul>
                </section>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                </footer>

            </div>
        </div>
    </div>


    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/functions.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_1933136383614b6c0b2992f6_69842302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1933136383614b6c0b2992f6_69842302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_214162950614b6c0b2999e4_16881819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_214162950614b6c0b2999e4_16881819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                        <div class="messages bottom-margin">
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                    <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>

                <?php
}
}
/* {/block 'messages'} */
}
