<?php /* Smarty version 3.1.24, created on 2016-11-21 11:50:16
         compiled from "./templates/noExiste.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:176775832d168c22f04_19832344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a280b84fe34a8bfaa501c2e6d666f7e6cdf462bd' => 
    array (
      0 => './templates/noExiste.tpl',
      1 => 1479722096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176775832d168c22f04_19832344',
  'variables' => 
  array (
    'modulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5832d168c29dc2_00846446',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5832d168c29dc2_00846446')) {
function content_5832d168c29dc2_00846446 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '176775832d168c22f04_19832344';
?>
<br />
<font color="red" size="3" align="center">
	El modulo <b><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</b> no existe
</font><?php }
}
?>