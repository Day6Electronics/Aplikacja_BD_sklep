<?php
/* Smarty version 3.1.39, created on 2021-09-17 17:19:26
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144b1fee50c70_12772198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db3fd20591e03f5bbfe2e3be8e7004ad676c284' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\loginView.tpl',
      1 => 1631891965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144b1fee50c70_12772198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18781838746144b1fee4c956_39392226', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_18781838746144b1fee4c956_39392226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18781838746144b1fee4c956_39392226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>					
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">
            <div class="row gtr-200">
                <div class="col-12 col-12-small align-center">
                    <h2>Logowanie</h2>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Login:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="login" id="id_login" value="<?php echo $_smarty_tpl->tpl_vars['l_form']->value->login;?>
" placeholder="Login" />
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Hasło:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="password" name="pass" id="id_pass" value="<?php echo $_smarty_tpl->tpl_vars['l_form']->value->pass;?>
" placeholder="Hasło" />
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                    <ul class="actions">
                        <li><button class="button primary icon solid fa-sign-in-alt" type="submit">Zaloguj</button></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow" class="button icon solid fa-user-plus">Nowe konto</a></li>
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
