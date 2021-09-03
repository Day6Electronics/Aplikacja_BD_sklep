{extends file="main.tpl"}

{block name=content}
    <div class="col-12 col-12-small">
        {if count($products) > 0}
            <p>Wyniki wyszukiwania "{$query}" ({count($products)})</p>
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
                                <form method="post" action="{$conf->action_root}addToCart">
                                    <p>Ilość: <input type="number" name="q_form" id="q_form" value="{$q_form->quantity|default: "1"}" min='1' max='99'/> szt.</p>
                                </form>
                                <a class="button primary fit medium icon solid fa-shopping-basket" style="background-color:rgb(30, 200, 50);" href="{$conf->action_url}addToCart/{$p['id_product']}">Do koszyka</a>
                            </td>
                        </tr>
                    {/strip}
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}