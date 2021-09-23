<?php
/* Smarty version 3.1.39, created on 2021-09-21 22:55:13
  from 'C:\Serwery i inne szmery\xamp\htdocs\ElectroWorld\app\views\productListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614a46b1ca6744_29485280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57e6ddee106321de90b15d78d6e6d654e62d306c' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\ElectroWorld\\app\\views\\productListView.tpl',
      1 => 1632257711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:productListViewTable.tpl' => 1,
  ),
),false)) {
function content_614a46b1ca6744_29485280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1635652585614a46b1ca38c2_54595013', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1635652585614a46b1ca38c2_54595013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1635652585614a46b1ca38c2_54595013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
            <style>
                #products{
                    border-collapse: collapse;
                }
                #products th{
                    padding-top: 12px;
                    padding-bottom: 12px;
                    background-color: #f56a6a;
                    color: white;
                }
                #products td, #products th {
                    border: 1px solid black;
                    padding: 10px;
                    vertical-align: middle;
                    horizontal-align: middle;
                    text-align: center;
                    margin-left: auto;
                    margin-right: auto;
                }
                .center {
                    text-align: center;
                }
            </style>
            
            
            <div id="products">
                <?php $_smarty_tpl->_subTemplateRender("file:productListViewTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            
<?php
}
}
/* {/block 'content'} */
}
