{extends file="main.tpl"}

{block name=content}
    <section>					
        <form method="post" action="{$conf->action_url}finalizeOrder">
            <div class="row gtr-200">
                <div class="col-12 col-12-small align-center">
                    <h2>Adres do zamówienia</h2>
                </div>
                <div class="col-3 col-12-small align-right">
                    <p>Proszę podać adres dostawy:</p>
                </div>
                <div class="col-6">
                    <textarea name="address" id="id_address" rows="10" value="{$address_form->address}"></textarea>
                </div>
                <div class="col-3">
                    <p>Przykładowy adres:</br>Jan Kowalski</br>ul. Kwiatowa 23/3a</br>34-754 Olesie Dolne</br>Polska</p>
                </div>
                <div class="col-12">
                    <p></p>
                </div>
                <div class="col-3 col-12-small align-right">
                    <p>Email:</p>
                </div>
                <div class="col-6">
                    <input type="text" name="email" id="id_email" value="{$address_form->email}" placeholder="Podaj adres email"/>
                </div>
                <div class="col-12">
                    <p></p>
                </div>
                <div class="col-3 col-12-small align-right">
                    <p>Numer telefonu:</p>
                </div>
                <div class="col-6">
                    <input type="text" name="phone" id="id_phone" value="{$address_form->phone}" placeholder="Podaj numer telefonu"/>
                </div>
                <div class="col-12">
                    <p></p>
                </div>
                <div class="col-3 col-12-small">
                </div>
                <div class="col-6 col-12-small">
                    <ul class="actions">
                        <li><a href="{$conf->action_url}cartShow" class="button"><i class="fas fa-arrow-circle-left"></i> Powrót do koszyka</a></li>
                        <li><button class="button primary" type="submit" style="background-color:rgb(30, 200, 50);"><i class="far fa-credit-card"></i> Zamawiam i płacę</button></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
{/block}