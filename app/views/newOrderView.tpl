{extends file="main.tpl"}

{block name=content}
    <section>					
        <form method="post" onsubmit="confirmLink('{$conf->action_root}finalizeOrder','Czy potwierdzasz zamówinie?')">
            <div class="row gtr-200">
                <div class="col-12 col-12-small align-center">
                    <h2>Dane osobowe:</h2>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Imię</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="name" id="id_name" value="{$address_form->name}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nazwisko</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="surname" id="id_surname" value="{$address_form->surname}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Email</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="email" id="id_email" value="{$address_form->email}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nr telefonu</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="phone" id="id_phone" value="{$address_form->phone}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-12 col-12-small align-center">
                    <h2>Adres do wysyłki:</h2>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Ulica</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="street" id="id_street" value="{$address_form->street}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nr domu</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="houseNum" id="id_houseNum" value="{$address_form->houseNum}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nr mieszkania</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="apartNum" id="id_apartNum" value="{$address_form->apartNum}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Kod pocztowy</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="postCode" id="id_postCode" value="{$address_form->postCode}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Miasto</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="city" id="id_city" value="{$address_form->city}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Kraj</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="country" id="id_country" value="{$address_form->country}"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                    <ul class="actions">
                        <li><button class="button primary" type="submit" style="background-color: limegreen"><i class="far fa-credit-card"></i> Zamawiam</button></li>
                    </ul>
                </div>
            </div>
        </form>
</section>
{/block}