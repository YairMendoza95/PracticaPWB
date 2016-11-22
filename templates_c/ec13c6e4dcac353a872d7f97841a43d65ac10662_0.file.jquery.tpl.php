<?php /* Smarty version 3.1.24, created on 2016-11-21 20:18:20
         compiled from "./templates/jquery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6165833487ceb1fe2_50885730%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec13c6e4dcac353a872d7f97841a43d65ac10662' => 
    array (
      0 => './templates/jquery.tpl',
      1 => 1478830524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6165833487ceb1fe2_50885730',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5833487cf0f206_97646253',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5833487cf0f206_97646253')) {
function content_5833487cf0f206_97646253 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6165833487ceb1fe2_50885730';
?>
<div class="row">
	<div class="col-md-12">
		<h1>Manipulando el DOM con JQuery</h1>
		<input type="text" id="dato" value="xD" />
		<br />
		<input type="text" id="otro" name="otro" />
		<br />
		<input type="button" id="ver" name="ver" value="Mostrar" onclick="mostrar();" />
		<div id="uno"></div>
	</div>
</div><?php }
}
?>