<?php /* Smarty version 3.1.24, created on 2016-11-10 14:18:04
         compiled from "./templates/jquery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18693667665824d5fc1eb1e2_18591551%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cd5935f0cef7d8a0596c76c5ba6b7a0a24fe3ac' => 
    array (
      0 => './templates/jquery.tpl',
      1 => 1478808925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18693667665824d5fc1eb1e2_18591551',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5824d5fc2424e7_21307634',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5824d5fc2424e7_21307634')) {
function content_5824d5fc2424e7_21307634 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18693667665824d5fc1eb1e2_18591551';
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