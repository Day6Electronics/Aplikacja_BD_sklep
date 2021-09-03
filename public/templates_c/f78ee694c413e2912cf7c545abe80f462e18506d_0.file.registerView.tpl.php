<?php
/* Smarty version 3.1.39, created on 2021-08-18 15:45:58
  from 'C:\xampp\htdocs\ElectroWorld\app\views\registerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611d0f16bcdc24_50933709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78ee694c413e2912cf7c545abe80f462e18506d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElectroWorld\\app\\views\\registerView.tpl',
      1 => 1629294356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611d0f16bcdc24_50933709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1127390939611d0f16bb9d58_33344692', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1127390939611d0f16bb9d58_33344692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1127390939611d0f16bb9d58_33344692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>					
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">
            <div class="row gtr-200">
                <div class="col-12 col-12-small align-center">
                <h2>Rejestracja</h2>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Wpisz swój login:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="text" name="login1" id="id_login1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login1;?>
" placeholder="Login" />
                </div>
                <div class="col-4 col-12-small">
                    <p>(3 - 25 znaków)</p>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Wpisz swoje hasło:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="password" name="pass1" id="id_pass1" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass1;?>
" placeholder="Hasło" />
                </div>
                <div class="col-4 col-12-small">
                    <p>(5 - 25 znaków)</p>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Potwierdź swoje hasło:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="password" name="pass2" id="id_pass2" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass2;?>
" placeholder="Potwierdź hasło" />
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                    <ul class="actions">
                        <li><input value="Zarejestruj się" class="button primary" type="submit"></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button">Powrót</a></li>
                    </ul>
                </div>
                <div class="col-4 col-12-small">
                </div>
            </div>
        </form>
</section>
<?php
}
}
/* {/block 'content'} */
}
