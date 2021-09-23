<?php
/* Smarty version 3.1.39, created on 2021-09-23 10:50:48
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\cartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614c3fe80ed172_65162173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29b72b810840604c8e50d85f8263fd454f7fc6cd' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\cartView.tpl',
      1 => 1632387044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614c3fe80ed172_65162173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1876481458614c3fe80df3e6_11110034', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1876481458614c3fe80df3e6_11110034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1876481458614c3fe80df3e6_11110034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="table-wrapper">
        <style>
            #cartTable td, #cartTable th {
                padding: 10px;
                vertical-align: middle;
                text-align: center;
                possition: absolute;
            }
            .center {
                text-align: center;
            }
        </style>
        <h2 class="center"><i class="icon solid fa-shopping-cart"></i> Koszyk</h2>
        <?php if (count($_smarty_tpl->tpl_vars['cart']->value) > 0) {?>
            <table class="alt" id="cartTable">
                <thead>
                    <tr>
                        <th style="width: 500px">Produkt</th>
                        <th style="width: 60px">Ilość</th>
                        <th style="width: 100px">Cena za 1 szt.</th>
                        <th style="width: 100px">Razem</th>
                        <th style="width: 70px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["quantity"];?>
 szt.</td><td><?php echo number_format($_smarty_tpl->tpl_vars['c']->value["prize"],2,',',' ');?>
 zł</td><td><?php echo number_format($_smarty_tpl->tpl_vars['c']->value["prize"]*$_smarty_tpl->tpl_vars['c']->value["quantity"],2,',',' ');?>
 zł</td><?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['c']->value["prize"]*$_smarty_tpl->tpl_vars['c']->value["quantity"]));?><td><a onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteFromCart/<?php echo $_smarty_tpl->tpl_vars['c']->value["id_product"];?>
','Czy na pewno usunąć produkt?')" class="button primary small"><i class="fas fa-trash-alt"></i></a></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
                <tfoot>
                    <tr>
                        <td style="background-color: #f56a6a; color: black;">Razem do zapłaty:</td>
                        <td style="background-color: #f56a6a;"></td>
                        <td style="background-color: #f56a6a;"></td>
                        <td style="background-color: #f56a6a; color: black;"><?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,',',' ');?>
 zł</td>
                    </tr>
                </tfoot>
            </table>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
orderNew" class="button primary medium" style="background-color: limegreen"><i class="fas fa-cash-register"></i> Realizuj zamówienie</a>
        <?php } else { ?>
            <h3 class="center">Twój koszyk jest pusty.</h3>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
