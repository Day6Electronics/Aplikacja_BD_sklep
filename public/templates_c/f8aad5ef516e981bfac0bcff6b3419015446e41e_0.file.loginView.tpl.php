<?php
/* Smarty version 3.1.39, created on 2021-08-19 15:08:29
  from 'C:\xampp\htdocs\ElectroWorld\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611e57cda44735_49668144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8aad5ef516e981bfac0bcff6b3419015446e41e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElectroWorld\\app\\views\\loginView.tpl',
      1 => 1629378456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611e57cda44735_49668144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1027609641611e57cda3a3d6_78787232', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1027609641611e57cda3a3d6_78787232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1027609641611e57cda3a3d6_78787232',
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
                    <input type="text" name="login" id="id_login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" placeholder="Login" />
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Hasło:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="password" name="pass" id="id_pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
" placeholder="Hasło" />
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                    <ul class="actions">
                        <li><input value="Zaloguj" class="button primary" type="submit"></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow" class="button">Rejestracja</a></li>
                    </ul>
                </div>
        </form>
</section>
<?php
}
}
/* {/block 'content'} */
}
