<?php
/* Smarty version 3.1.39, created on 2021-09-22 19:10:20
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\productListViewTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614b637c59a090_69679666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37c620e963af2415213bb41c21485b6c32adee8' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\productListViewTable.tpl',
      1 => 1632330617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614b637c59a090_69679666 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-12 col-12-small">
    <?php if ($_smarty_tpl->tpl_vars['searchForm']->value->query != '') {?>
        <?php if (count($_smarty_tpl->tpl_vars['products']->value) > 0) {?>
            <p>Wyniki wyszukiwania "<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->query;?>
" (<?php echo $_smarty_tpl->tpl_vars['pages']->value->recNum;?>
), strona: <?php echo $_smarty_tpl->tpl_vars['pages']->value->currentPage;?>
 z <?php echo $_smarty_tpl->tpl_vars['pages']->value->lastPage;?>
</p>
        </div>
        <div class="center">
            <ul class="pagination">
                <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage < 2) {?>
                    <li><button class="button disabled"><<</button></li>
                    <li><button class="button disabled"><</button></li>
                    <?php } else { ?>
                    <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable', 'products');"><<</button></li>
                    <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable/<?php echo $_smarty_tpl->tpl_vars['pages']->value->currentPage-1;?>
', 'products');"><</button></li>
                    <?php }?>


                <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage < 2) {?>
                    <li><a class="page"></a></li>
                    <?php } else { ?>
                    <li><a class="page">1</a></li>
                    <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage < 3) {?>
                <?php } else { ?>
                    <li><span>&hellip;</span></li>
                    <?php }?>

                <li><a class="page active">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['pages']->value->currentPage;?>
&nbsp;&nbsp;</a></li>

                <?php if (($_smarty_tpl->tpl_vars['pages']->value->lastPage-$_smarty_tpl->tpl_vars['pages']->value->currentPage) < 2) {?>
                <?php } else { ?>
                    <li><span>&hellip;</span></li>
                    <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage >= $_smarty_tpl->tpl_vars['pages']->value->lastPage) {?>
                    <li><a class="page"></a></li>
                    <?php } else { ?>
                    <li><a class="page"><?php echo $_smarty_tpl->tpl_vars['pages']->value->lastPage;?>
</a></li>
                    <?php }?>


                <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage > $_smarty_tpl->tpl_vars['pages']->value->lastPage-1) {?>
                    <li><button class="button disabled">></button></li>
                    <li><button class="button disabled">>></button></li>
                    <?php } else { ?>
                    <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable/<?php echo $_smarty_tpl->tpl_vars['pages']->value->currentPage+1;?>
', 'products');">></button></li>
                    <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable/<?php echo $_smarty_tpl->tpl_vars['pages']->value->lastPage;?>
', 'products');">>></button></li>
                    <?php }?>
            </ul>
        </div>
        <div class="table-wrapper">
            <table class="alt" id="products">
                <thead>
                    <tr>
                        <th style="width: 350px">Nazwa</th>
                        <th>Opis</th>
                        <th style="width: 100px">Cena</th>
                        <th style="width: 200px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</td><td><p><?php echo substr($_smarty_tpl->tpl_vars['p']->value['description'],0,60);?>
<span id="dots<?php echo $_smarty_tpl->tpl_vars['p']->value['id_product'];?>
">...</span><span style="display: none;" id="more<?php echo $_smarty_tpl->tpl_vars['p']->value['id_product'];?>
"><?php echo substr($_smarty_tpl->tpl_vars['p']->value['description'],60);?>
</span></p><button class="button small" onclick="description(<?php echo $_smarty_tpl->tpl_vars['p']->value['id_product'];?>
)" id="myBtn<?php echo $_smarty_tpl->tpl_vars['p']->value['id_product'];?>
">Rozwiń opis</button></td><td><?php echo number_format($_smarty_tpl->tpl_vars['p']->value['prize'],2,',',' ');?>
 zł</td><td><div class="center"><a class="button primary medium icon solid fa-cart-plus" style="background-color:rgb(30, 200, 50);" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToCart/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_product'];?>
">Do koszyka</a></div></td></tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <div class="center">
                <ul class="pagination">
                    <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage < 2) {?>
                        <li><button class="button disabled"><<</button></li>
                        <li><button class="button disabled"><</button></li>
                        <?php } else { ?>
                        <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable', 'products');"><<</button></li>
                        <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable/<?php echo $_smarty_tpl->tpl_vars['pages']->value->currentPage-1;?>
', 'products');"><</button></li>
                        <?php }?>


                    <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage < 2) {?>
                        <li><a class="page"></a></li>
                        <?php } else { ?>
                        <li><a class="page">1</a></li>
                        <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage < 3) {?>
                    <?php } else { ?>
                        <li><span>&hellip;</span></li>
                        <?php }?>

                    <li><a class="page active">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['pages']->value->currentPage;?>
&nbsp;&nbsp;</a></li>

                    <?php if (($_smarty_tpl->tpl_vars['pages']->value->lastPage-$_smarty_tpl->tpl_vars['pages']->value->currentPage) < 2) {?>
                    <?php } else { ?>
                        <li><span>&hellip;</span></li>
                        <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage >= $_smarty_tpl->tpl_vars['pages']->value->lastPage) {?>
                        <li><a class="page"></a></li>
                        <?php } else { ?>
                        <li><a class="page"><?php echo $_smarty_tpl->tpl_vars['pages']->value->lastPage;?>
</a></li>
                        <?php }?>


                    <?php if ($_smarty_tpl->tpl_vars['pages']->value->currentPage > $_smarty_tpl->tpl_vars['pages']->value->lastPage-1) {?>
                        <li><button class="button disabled">></button></li>
                        <li><button class="button disabled">>></button></li>
                        <?php } else { ?>
                        <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable/<?php echo $_smarty_tpl->tpl_vars['pages']->value->currentPage+1;?>
', 'products');">></button></li>
                        <li><button onclick="ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListTable/<?php echo $_smarty_tpl->tpl_vars['pages']->value->lastPage;?>
', 'products');">>></button></li>
                        <?php }?>
                </ul>
            </div>
        <?php } else { ?>
            <p>Nie znaleziono wyników dla "<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->query;?>
"</p>
        <?php }?>
    <?php } else { ?>
        <p>Nie podano zapytania!</p>
    <?php }?>
    <?php echo '<script'; ?>
>
        function description(id) {
            var dots = document.getElementById("dots" + id.toString());
            var moreText = document.getElementById("more" + id.toString());
            var btnText = document.getElementById("myBtn" + id.toString());

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Rozwiń opis";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Zwiń opis";
                moreText.style.display = "inline";
            }
        }
    <?php echo '</script'; ?>
>
</div>

<?php }
}
