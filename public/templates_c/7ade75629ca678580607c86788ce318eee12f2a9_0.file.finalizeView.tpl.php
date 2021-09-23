<?php
/* Smarty version 3.1.39, created on 2021-09-23 17:59:55
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\finalizeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614ca47b7e5a59_60534551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ade75629ca678580607c86788ce318eee12f2a9' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\finalizeView.tpl',
      1 => 1632412793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614ca47b7e5a59_60534551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1400801155614ca47b7e1ed2_54794235', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1400801155614ca47b7e1ed2_54794235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1400801155614ca47b7e1ed2_54794235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>					
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
finalizeOrder">
            <div class="row gtr-200">
                <div class="col-12 col-12-small align-center">
                    <h2>Adres do zamówienia</h2>
                </div>
                <div class="col-3 col-12-small align-right">
                    <p>Proszę podać adres dostawy:</p>
                </div>
                <div class="col-6">
                    <textarea name="address" id="id_address" rows="10" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->address;?>
"></textarea>
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
                    <input type="text" name="email" id="id_email" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->email;?>
" placeholder="Podaj adres email"/>
                </div>
                <div class="col-12">
                    <p></p>
                </div>
                <div class="col-3 col-12-small align-right">
                    <p>Numer telefonu:</p>
                </div>
                <div class="col-6">
                    <input type="text" name="phone" id="id_phone" value="<?php echo $_smarty_tpl->tpl_vars['address_form']->value->phone;?>
" placeholder="Podaj numer telefonu"/>
                </div>
                <div class="col-12">
                    <p></p>
                </div>
                <div class="col-3 col-12-small">
                </div>
                <div class="col-6 col-12-small">
                    <ul class="actions">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartShow" class="button"><i class="fas fa-arrow-circle-left"></i> Powrót do koszyka</a></li>
                        <li><button class="button primary" type="submit" style="background-color:rgb(30, 200, 50);"><i class="far fa-credit-card"></i> Zamawiam i płacę</button></li>
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
