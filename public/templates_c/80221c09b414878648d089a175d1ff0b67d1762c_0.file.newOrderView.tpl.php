<?php
/* Smarty version 3.1.39, created on 2021-09-23 13:26:15
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\newOrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c64570969a1_37627285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80221c09b414878648d089a175d1ff0b67d1762c' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\newOrderView.tpl',
      1 => 1632396287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c64570969a1_37627285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2102412597614c6457091924_71379992', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2102412597614c6457091924_71379992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2102412597614c6457091924_71379992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>					
        <form method="post" onsubmit="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
finalizeOrder','Czy potwierdzasz zamówinie?')">
            <div class="row gtr-200">
                <div class="col-12 col-12-small align-center">
                    <h2>Dane osobowe:</h2>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Imię</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="name" id="id_name" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->name;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nazwisko</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="surname" id="id_surname" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->surname;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Email</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="email" id="id_email" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->email;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nr telefonu</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="phone" id="id_phone" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->phone;?>
"/>
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
                    <input type="text" name="street" id="id_street" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->street;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nr domu</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="houseNum" id="id_houseNum" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->houseNum;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Nr mieszkania</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="apartNum" id="id_apartNum" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->apartNum;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Kod pocztowy</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="postCode" id="id_postCode" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->postCode;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Miasto</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="city" id="id_city" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->city;?>
"/>
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Kraj</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="country" id="id_country" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->country;?>
"/>
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
<?php
}
}
/* {/block 'content'} */
}
