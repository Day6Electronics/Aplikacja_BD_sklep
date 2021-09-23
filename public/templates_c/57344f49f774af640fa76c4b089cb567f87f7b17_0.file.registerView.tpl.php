<?php
/* Smarty version 3.1.39, created on 2021-09-17 17:21:36
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\registerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144b2807b2ae3_86861200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57344f49f774af640fa76c4b089cb567f87f7b17' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\registerView.tpl',
      1 => 1631892094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6144b2807b2ae3_86861200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11825148376144b2807af105_82006990', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_11825148376144b2807af105_82006990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11825148376144b2807af105_82006990',
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
                    <input type="text" name="login1" id="id_login1" value="<?php echo $_smarty_tpl->tpl_vars['r_form']->value->login1;?>
" placeholder="Login" />
                </div>
                <div class="col-4 col-12-small">
                    <p>(3 - 25 znaków)</p>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Wpisz swoje hasło:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="password" name="pass1" id="id_pass1" value="<?php echo $_smarty_tpl->tpl_vars['r_form']->value->pass1;?>
" placeholder="Hasło" />
                </div>
                <div class="col-4 col-12-small">
                    <p>(5 - 25 znaków)</p>
                </div>
                <div class="col-4 col-12-small align-right">
                    <p>Potwierdź swoje hasło:</p>
                </div>
                <div class="col-4 col-12-small">
                    <input type="password" name="pass2" id="id_pass2" value="<?php echo $_smarty_tpl->tpl_vars['r_form']->value->pass2;?>
" placeholder="Potwierdź hasło" />
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                </div>
                <div class="col-4 col-12-small">
                    <ul class="actions">
                        <li><button class="button primary icon solid fa-user-plus" type="submit">Stwórz konto</button></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button icon solid fa-reply">Powrót</a></li>
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
