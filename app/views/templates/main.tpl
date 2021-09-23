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
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/fontawesome.css" />
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/solid.css" />
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
                                <a href="{$conf->action_root}shopShow" class="logo"><strong>ElectroWorld</strong></a>
                            </div>
                            <div class="col-4 col-12-small">
                                <section id="search" class="alt">
                                    <form method="post" id="search-form" action="{$conf->action_root}search">
                                        <input type="text" name="sf_query" placeholder="Wpisz czego poszukujesz..." value="{$searchForm->query|default}"/>
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
                                {if count($conf->roles)>0}
                                    <p>Użytkownik:<br><em style="color:#f56a6a;">{\core\SessionUtils::load($log, true)|default}</em></p>
                                {else}
                                {/if}
                            </div>
                            <div class="col-2 col-12-small" align="right">
                                <ul class="actions">
                                    <li>
                                        {if count($conf->roles)>0}
                                            <a href="{$conf->action_root}logout" class="button primary icon solid fa-sign-out-alt" onclick="info()">Wyloguj</a>
                                        {else}	
                                            <a href="{$conf->action_root}loginShow" class="button icon solid fa-sign-in-alt">Logowanie</a>
                                        {/if}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>

                {block name=content}{/block}
                
                {block name=messages}

                    {if $msgs->isMessage()}
                        <div class="messages bottom-margin">
                            <ul>
                                {foreach $msgs->getMessages() as $msg}
                                    {strip}
                                        <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
                                        {/strip}
                                    {/foreach}
                            </ul>
                        </div>
                    {/if}

                {/block}

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
                        <li><a href="{$conf->action_root}shopShow" class="icon solid fa-home"> Strona główna</a></li>
                        <li>
                            <span class="opener">Arduino</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/arduino-moduly-glowne">Arduino - moduły główne</a></li>
                                <li><a href="{$conf->action_root}search/arduino-shield">Arduino Shield - rozszerzenia</a></li>
                                <li><a href="{$conf->action_root}search/arduino-ksiazki">Książki o Arduino</a></li>
                                <li><a href="{$conf->action_root}search/arduino-obudowy">Obudowy</a></li>
                                <li><a href="{$conf->action_root}search/arduino-zasilanie">Zasilanie</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Mikrokontrolery AVR</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/uc-avr-attiny">ATtiny</a></li>
                                <li><a href="{$conf->action_root}search/uc-avr-atmega">ATmega</a></li>
                                <li><a href="{$conf->action_root}search/uc-avr-ksiazki">Książki o AVR</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Czujniki</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/czujniki-temperatury">Czujniki temperatury</a></li>
                                <li><a href="{$conf->action_root}search/czujniki-wilgotnosci">Czujniki wilgotności</a></li>
                                <li><a href="{$conf->action_root}search/czujniki-cisnienia">Czujniki ciśnienia</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Serwomechanizmy</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/serwa-micro">Serwa typu micro</a></li>
                                <li><a href="{$conf->action_root}search/serwa-medium">Serwa typu medium</a></li>
                                <li><a href="{$conf->action_root}search/serwa-standard">Serwa typu standard</a></li>
                                <li><a href="{$conf->action_root}search/serwa-akcesoria">Akcesoria do serw</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Silniki elektryczne</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/silniki-bez-przekladni">Silniki bez przekładni</a></li>
                                <li><a href="{$conf->action_root}search/silniki-z-przekladnia">Silniki z przekładnią</a></li>
                                <li><a href="{$conf->action_root}search/silniki-krokowe">Silniki krokowe</a></li>
                                <li><a href="{$conf->action_root}search/silniki-wibracyjne">Silniki wibracyjne</a></li>
                                <li><a href="{$conf->action_root}search/silniki-pompy">Pompy wodne</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Elementy pasywne</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/elem-pas-rezystory">Rezystory</a></li>
                                <li><a href="{$conf->action_root}search/elem-pas-kondensatory">Kondensatory</a></li>
                                <li><a href="{$conf->action_root}search/elem-pas-dlawiki">Dławiki</a></li>
                                <li><a href="{$conf->action_root}search/elem-pas-bezpieczniki">Bezpieczniki</a></li>
                                <li><a href="{$conf->action_root}search/elem-pas-potencjometry">Potencjometry</a></li>
                                <li><a href="{$conf->action_root}search/elem-pas-magnesy">Magnesy</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Diody</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/diody-led">Diody LED</a></li>
                                <li><a href="{$conf->action_root}search/diody-prostownicze">Diody prostownicze</a></li>
                                <li><a href="{$conf->action_root}search/diody-zenera">Diody Zenera</a></li>
                                <li><a href="{$conf->action_root}search/diody-schottky">Diody Schottky</a></li>
                                <li><a href="{$conf->action_root}search/diody-paski-ledowe">Paski ledowe</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Wyświetlacze i ekrany</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/wyswietlacze-lcd">Wyświetlacze LCD</a></li>
                                <li><a href="{$conf->action_root}search/wyswietlacze-tft">Wyświetlacze TFT</a></li>
                                <li><a href="{$conf->action_root}search/wyswietlacze-ips">Wyświetlacze IPS</a></li>
                                <li><a href="{$conf->action_root}search/wyswietlacze-oled">Wyświetlacze OLED</a></li>
                                <li><a href="{$conf->action_root}search/wyswietlacze-e-paper">Wyświetlacze e-paper</a></li>
                                <li><a href="{$conf->action_root}search/wyswietlacze-segmentowe">Wyświetlacze segmentowe</a></li>
                                <li><a href="{$conf->action_root}search/wyswietlacze-matryce-led">Matryce LED</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Druk 3D</span>
                            <ul>
                                <li><a href="{$conf->action_root}search/druk3d-drukarki">Drukarki 3D</a></li>
                                <li><a href="{$conf->action_root}search/druk3d-filamenty">Filamenty</a></li>
                                <li><a href="{$conf->action_root}search/druk3d-piora3d">Pióra 3D</a></li>
                                <li><a href="{$conf->action_root}search/druk3d-akcesoria">Akcesoria</a></li>
                                <li><a href="{$conf->action_root}search/druk3d-czesci-zamienne">Części zamienne</a></li>
                            </ul>
                        </li>
                        <li>
                            {if count($conf->roles)>0}
                                <a href="{$conf->action_root}cartShow" class="pure-menu-heading pure-menu-link icon solid fa-shopping-cart"> Koszyk ({number_format($cartValue, 2, ',', ' ')} zł)</a>
                                <a href="{$conf->action_root}accountShow" class="pure-menu-heading pure-menu-link icon solid fa-user"> Konto ({\core\SessionUtils::load($log, true)|default})</a>
                                <a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link icon solid fa-sign-out-alt" onclick="info()"> Wyloguj</a>
                            {else}	
                                <a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link icon solid fa-sign-in-alt"> Logowanie</a>
                            {/if}
                        </li>
                    </ul>
                </nav>
                <script>
                    function info(){
                        alert("Poprawnie wylogowano.");
                    }
                </script>
                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Dlaczego warto u nas kupować:</h2>
                    </header>
                    <div class="mini-posts">
                        <article>
                            <a class="image"><img src="{$conf->app_url}/images/spec-of.jpg" alt="" /></a>
                            <p>Liczne promocje, rabaty dla stałych klientów i sezonowe wyprzedaże.</p>
                        </article>
                        <article>
                            <a class="image"><img src="{$conf->app_url}/images/gwarancja.jpg" alt="" /></a>
                            <p>Gwarancja najwyższej jakości oferowanych przez nas produktów.</p>
                        </article>
                        <article>
                            <a class="image"><img src="{$conf->app_url}/images/gratis.jpg" alt="" /></a>
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
    <script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
    <script src="{$conf->app_url}/assets/js/browser.min.js"></script>
    <script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
    <script src="{$conf->app_url}/assets/js/util.js"></script>
    <script src="{$conf->app_url}/assets/js/main.js"></script>
    <script src="{$conf->app_url}/assets/js/functions.js"></script>

</body>
</html>