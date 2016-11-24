<?php /* Smarty version 3.1.24, created on 2016-11-24 21:18:44
         compiled from "./templates/encabezado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1584558374b247a5440_49926214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3a1c0b78cfbf626bbb992e4ecddeeec87c47118' => 
    array (
      0 => './templates/encabezado.tpl',
      1 => 1480018614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584558374b247a5440_49926214',
  'variables' => 
  array (
    'uActivo' => 0,
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58374b24c4c325_17447545',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58374b24c4c325_17447545')) {
function content_58374b24c4c325_17447545 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1584558374b247a5440_49926214';
?>
<h2 id="titulo"><?php if (empty($_smarty_tpl->tpl_vars['uActivo']->value)) {?>Sistema v1.0 <?php } else {
echo $_smarty_tpl->tpl_vars['uActivo']->value['nombre'];
}?>- <small>[<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
]</small></h2><?php }
}
?>