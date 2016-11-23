<?php /* Smarty version 3.1.24, created on 2016-09-28 15:01:01
         compiled from "./templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:178306895257ec217d6a3e40_09092256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be8416be4e3cac685e3e688f3766180f6676f5cd' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1475092856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178306895257ec217d6a3e40_09092256',
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57ec217d711a96_28182133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ec217d711a96_28182133')) {
function content_57ec217d711a96_28182133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '178306895257ec217d6a3e40_09092256';
?>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#opciones1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand">Menu: </span>
    </div>
    <div class="collapse navbar-collapse" id="opciones1">
      <ul class="nav navbar-nav">
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "inicio") {?>class="active"<?php }?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "html") {?>class="active"<?php }?>><a href="index.php?pagina=html"><span class="glyphicon glyphicon-list"></span> Etiquetas HTML</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "instituciones") {?>class="active"<?php }?>><a href="index.php?pagina=instituciones"><span class="glyphicon glyphicon-education"></span> Instituciones</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "registro") {?>class="active"<?php }?>><a href="index.php?pagina=registro"><span class="glyphicon glyphicon-edit"></span> Registro</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "busqueda") {?>class="active"<?php }?>><a href="index.php?pagina=busqueda"><span class="glyphicon glyphicon-search"></span> Búsqueda</a></li>
      </ul>
	</div>
</nav>
<?php }
}
?>