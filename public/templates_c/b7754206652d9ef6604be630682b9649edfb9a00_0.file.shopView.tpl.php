<?php
/* Smarty version 3.1.39, created on 2021-09-21 22:54:17
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\shopView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a4679009f37_44641717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7754206652d9ef6604be630682b9649edfb9a00' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\shopView.tpl',
      1 => 1632257654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614a4679009f37_44641717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_285352802614a4679002724_65009569', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_285352802614a4679002724_65009569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_285352802614a4679002724_65009569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="banner">
        <div class="content">
            <header>
                <h1 id="electro">Electro</h1><h1 id="world">World</h1>
                <h2>Elektronika dla każdego</h2>
                <style>
                    #electro {
                        display: inline;
                        color: #f56a6a;
                        text-shadow: 25px 15px 5px gray;
                        line-height: 2;
                    }
                    #world {
                        display: inline;
                        color: gray;
                        text-shadow: 25px 15px 5px #f56a6a;
                        line-height: 2;
                    }
                </style>
            </header>
            <p>ElectroWorld to sklep dla elektroników (zarówno hobbystów jak i profesjonalistów), w którym każdy znajdzie niezbędne narzędzia, akcesoria i części pozwalające realizować nawet najbardziej wyszukane projekty.</p>
        </div>
        <span class="image object">
            <style>
                    #pic {
                        box-shadow: 0px 0px 35px gray;
                    }
            </style>
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/main.jpg" alt="" id="pic"/>
        </span>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>W ofercie naszego sklepu znajdziesz m.in.</h2>
        </header>
        <div class="posts">
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/arduino.jpg" alt="" /></a>
                <h3>Arduino</h3>
                <p>Popularne moduły Arduino oparte na mikrokontrolerach z rodziny AVR.</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/arduino" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/mikro.jpg" alt="" /></a>
                <h3>Mikrokontrolery</h3>
                <p>Mikrokontrolery z rodziny AVR idealnie nadające się do mniej i bardziej zaawansowanych projektów.</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/uc-avr" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/czujniki.jpg" alt="" /></a>
                <h3>Czujniki</h3>
                <p>Czujniki temperatury, wilgotności, ciśnienia, krańcowe...</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/czujniki" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/serwo.jpg" alt="" /></a>
                <h3>Serwomechanizmy</h3>
                <p>Szczególnie popularne w szeroko rozumianej automatyce, robotyce i modelarstwie - głównie w pojazdach zdalnie sterowanych.</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/serwa" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/silniki.jpg" alt="" /></a>
                <h3>Silniki elektryczne</h3>
                <p>Silniki z przekładnią, bez przekładni, krokowe...</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/silniki" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/elem-pas.jpg" alt="" /></a>
                <h3>Elementy pasywne</h3>
                <p>Rezystory, kondensatory, dławiki, rezonatory, potencjometry, magnesy...</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/elem-pas" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/diody.jpg" alt="" /></a>
                <h3>Diody</h3>
                <p>Diody LED, diody prostownicze, diody Zenera, diody Schottky...</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/diody" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/wysw.jpg" alt="" /></a>
                <h3>Wyświetlacze i ekrany</h3>
                <p>Wyświetlacze LCD, TFT, IPS, OLED, e-paper, a także wyświetlacze segmentowe i matryce LED RGB.</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/wyswietlacze" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/3d.jpg" alt="" /></a>
                <h3>Druk 3D</h3>
                <p>Drukarki 3D, filamenty i akcesoria do druku 3D.</p>
                <ul class="actions">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/druk3d" class="button">Sprawdź</a></li>
                </ul>
            </article>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
