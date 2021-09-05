{extends file="main.tpl"}

{block name=content}
    <div class="col-12 col-12-small">
        {if count($products) > 0}
            <p>Wyniki wyszukiwania "{$query}" ({count($products)}), strona: {$page}</p>
        </div>
        <div class="table-wrapper">
            <style>
                #products{
                    border-collapse: collapse;
                }
                #products th{
                    padding-top: 12px;
                    padding-bottom: 12px;
                    background-color: tomato;
                    color: white;
                }
                #products td, #products th {
                    border: 1px solid black;
                    padding: 10px;
                    vertical-align: middle;
                    text-align: center;
                    possition: absolute;
                }
            </style>
            <table class="alt" id="products">
                <thead>
                    <tr>
                        <th style="width: 200px">Nazwa</th>
                        <th>Opis</th>
                        <th style="width: 100px">Cena</th>
                        <th style="width: 200px"></th>
                    </tr>
                </thead>
                <tbody>
                {else}
                <p>Nie znaleziono wyników dla "{$query}"</p>
            {/if}
            {foreach $products as $p}
                {strip}
                    <tr>
                        <td>{$p["name"]}</td>
                        <td>{$p["description"]}</td>
                        <td>{number_format($p["prize"], 2, ',', ' ')} zł</td>
                        <td>
                            <div class="center">
                                <form method="post" action="{$conf->action_root}addToCart/{$p['id_product']}">
                                    <p>Ilość: <input type="number" name="q_form" id="q_form" value="{$q_form->quantity|default: "1"}" min='1' max='99'/> szt.</p>
                                    <ul class="actions">
                                        <li><button type="submit" class="button primary fit medium icon solid fa-shopping-basket" style="background-color:rgb(30, 200, 50);">Do koszyka</button></li>
                                    </ul>
                                </form>
                            </div>
                        </td>
                    </tr>
                {/strip}
            {/foreach}
            </tbody>
        </table>
        <style>
            .center {
                text-align: center;
            }
        </style>
        <div class="center">
            <ul class="pagination">
                {if $page < 2}
                    <li><a class="button disabled"><<</a></li>
                    <li><a class="button disabled"><</a></li>
                    {else}
                    <li><a href="{$conf->action_root}search/1" class="button"><<</a></li>
                    <li><a href="{$conf->action_root}search/{$page-1}" class="button"><</a></li>
                    {/if}


                <li><a href="#" class="page active">1</a></li>
                <li><a href="#" class="page">2</a></li>
                <li><a href="#" class="page">3</a></li>
                <li><span>&hellip;</span></li>
                <li><a href="#" class="page">10</a></li>


                {if $page > 10}
                    <li><a class="button disabled">></a></li>
                    <li><a class="button disables">>></a></li>
                    {else}
                    <li><a href="{$conf->action_root}search/{$page+1}" class="button">></a></li>
                    <li><a href="#" class="button">>></a></li>
                    {/if}
            </ul>
        </div>
    </div>
{/block}