<?php
/* Smarty version 3.1.39, created on 2021-09-05 13:24:23
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\productListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6134a8e7be00c0_28662466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57e6ddee106321de90b15d78d6e6d654e62d306c' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\productListView.tpl',
      1 => 1630841060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6134a8e7be00c0_28662466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15717985186134a8e7bcf535_29150119', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_15717985186134a8e7bcf535_29150119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15717985186134a8e7bcf535_29150119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-12 col-12-small">
        <?php if (count($_smarty_tpl->tpl_vars['products']->value) > 0) {?>
            <p>Wyniki wyszukiwania "<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
" (<?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
), strona: <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
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
</td><td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value["prize"],2,',',' ');?>
 zł</td><td><div class="center"><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addToCart/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_product'];?>
"><p>Ilość: <input type="number" name="q_form" id="q_form" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['q_form']->value->quantity)===null||$tmp==='' ? "1" : $tmp);?>
" min='1' max='99'/> szt.</p><ul class="actions"><li><button type="submit" class="button primary fit medium icon solid fa-shopping-basket" style="background-color:rgb(30, 200, 50);">Do koszyka</button></li></ul></form></div></td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <style>
            .center {
                text-align: center;
            }
        </style>
        <div class="center">
            <ul class="pagination">
                <?php if ($_smarty_tpl->tpl_vars['page']->value < 2) {?>
                    <li><a class="button disabled"><<</a></li>
                    <li><a class="button disabled"><</a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/1" class="button"><<</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" class="button"><</a></li>
                    <?php }?>


                <li><a href="#" class="page active">1</a></li>
                <li><a href="#" class="page">2</a></li>
                <li><a href="#" class="page">3</a></li>
                <li><span>&hellip;</span></li>
                <li><a href="#" class="page">10</a></li>


                <?php if ($_smarty_tpl->tpl_vars['page']->value > 10) {?>
                    <li><a class="button disabled">></a></li>
                    <li><a class="button disables">>></a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" class="button">></a></li>
                    <li><a href="#" class="button">>></a></li>
                    <?php }?>
            </ul>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
