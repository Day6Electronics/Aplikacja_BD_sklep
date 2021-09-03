<?php
/* Smarty version 3.1.39, created on 2021-08-20 15:44:58
  from 'C:\xampp\htdocs\ElectroWorld\app\views\productListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611fb1da9f0e20_99042138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2524f849bb927aef9234298186803ecba414ad40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElectroWorld\\app\\views\\productListView.tpl',
      1 => 1629467096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611fb1da9f0e20_99042138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_418576704611fb1da9b5e96_23083700', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_418576704611fb1da9b5e96_23083700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_418576704611fb1da9b5e96_23083700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-12 col-12-small">
        <?php if (count($_smarty_tpl->tpl_vars['products']->value) > 0) {?>
            <p>Wyniki wyszukiwania "<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" (<?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
)</p>
    </div>
    <div class="table-wrapper">
        <style>
            #products{
                border-collapse: collapse;
            }
            #products th{
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: rgb(237, 109, 74);
                color: white;
            }
            #products td, #products th {
                border: 1px solid black;
                padding: 8px;
                vertical-align: middle;
                text-align: center;
            }
        </style>
        <table class="alt" id="products">
            <thead>
                <tr>
                    <th style="width: 200px">Nazwa</th>
                    <th>Opis</th>
                    <th style="width: 80px">Cena</th>
                    <th style="width: 80px">Ilość</th>
                    <th style="width: 80px"></th>
                </tr>
            </thead>
            <tbody>
        <?php } else { ?>
            <p>Nie znaleziono wyników dla "<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
"</p>
        <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["description"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["prize"];?>
 zł</td><td><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addToCart"><input type="text" name="q" id="q-form" placeholder="1"/></form></td><td><a class="button primary fit medium icon solid fa-shopping-basket" style="background-color:rgb(0, 230, 50);" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToCart/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_product'];?>
">Do koszyka</a></td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'content'} */
}
