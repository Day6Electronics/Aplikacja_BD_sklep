{extends file="main.tpl"}

{block name=content}
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
            <img src="{$conf->app_url}/images/main.jpg" alt="" id="pic"/>
        </span>
    </section>

    <!-- Section -->
    <section>
        <header class="major">
            <h2>W ofercie naszego sklepu znajdziesz m.in.</h2>
        </header>
        <div class="posts">
            <article>
                <a class="image"><img src="{$conf->app_url}/images/arduino.jpg" alt="" /></a>
                <h3>Arduino</h3>
                <p>Popularne moduły Arduino oparte na mikrokontrolerach z rodziny AVR.</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/arduino" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/mikro.jpg" alt="" /></a>
                <h3>Mikrokontrolery</h3>
                <p>Mikrokontrolery z rodziny AVR idealnie nadające się do mniej i bardziej zaawansowanych projektów.</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/uc-avr" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/czujniki.jpg" alt="" /></a>
                <h3>Czujniki</h3>
                <p>Czujniki temperatury, wilgotności, ciśnienia, krańcowe...</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/czujniki" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/serwo.jpg" alt="" /></a>
                <h3>Serwomechanizmy</h3>
                <p>Szczególnie popularne w szeroko rozumianej automatyce, robotyce i modelarstwie - głównie w pojazdach zdalnie sterowanych.</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/serwa" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/silniki.jpg" alt="" /></a>
                <h3>Silniki elektryczne</h3>
                <p>Silniki z przekładnią, bez przekładni, krokowe...</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/silniki" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/elem-pas.jpg" alt="" /></a>
                <h3>Elementy pasywne</h3>
                <p>Rezystory, kondensatory, dławiki, rezonatory, potencjometry, magnesy...</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/elem-pas" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/diody.jpg" alt="" /></a>
                <h3>Diody</h3>
                <p>Diody LED, diody prostownicze, diody Zenera, diody Schottky...</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/diody" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/wysw.jpg" alt="" /></a>
                <h3>Wyświetlacze i ekrany</h3>
                <p>Wyświetlacze LCD, TFT, IPS, OLED, e-paper, a także wyświetlacze segmentowe i matryce LED RGB.</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/wyswietlacze" class="button">Sprawdź</a></li>
                </ul>
            </article>
            <article>
                <a class="image"><img src="{$conf->app_url}/images/3d.jpg" alt="" /></a>
                <h3>Druk 3D</h3>
                <p>Drukarki 3D, filamenty i akcesoria do druku 3D.</p>
                <ul class="actions">
                    <li><a href="{$conf->action_root}search/druk3d" class="button">Sprawdź</a></li>
                </ul>
            </article>
        </div>
    </section>
{/block}