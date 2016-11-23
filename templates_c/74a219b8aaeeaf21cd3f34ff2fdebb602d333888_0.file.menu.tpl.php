<?php /* Smarty version 3.1.24, created on 2016-11-23 20:46:23
         compiled from "./templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3645835f20f982830_06821196%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74a219b8aaeeaf21cd3f34ff2fdebb602d333888' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1479930326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3645835f20f982830_06821196',
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5835f20fa2bed2_19384126',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5835f20fa2bed2_19384126')) {
function content_5835f20fa2bed2_19384126 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3645835f20f982830_06821196';
?>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#opciones1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand"><span id="mrj">xD</span></span>
    </div>
    <div class="collapse navbar-collapse" id="opciones1">
      <ul class="nav navbar-nav">
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "inicio") {?>class="active"<?php }?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "html") {?>class="active"<?php }?>><a href="index.php?modulo=etiquetas"><span class="glyphicon glyphicon-list"></span> Etiquetas HTML</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "instituciones") {?>class="active"<?php }?>><a href="index.php?modulo=instituciones"><span class="glyphicon glyphicon-education"></span> Instituciones</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "registro") {?>class="active"<?php }?>><a href="index.php?modulo=registro"><span class="glyphicon glyphicon-edit"></span> Registro</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "busqueda") {?>class="active"<?php }?>><a href="index.php?modulo=busqueda"><span class="glyphicon glyphicon-search"></span> Búsqueda</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "script") {?>class="active"<?php }?>><a href="index.php?modulo=script">[<span class="glyphicon glyphicon-console"></span>] Javascript</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "jquery") {?>class="active"<?php }?>><a href="index.php?modulo=jquery"><span class="glyphicon glyphicon-save"></span> JQuery</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "rbd") {?>class="active"<?php }?>><a href="index.php?modulo=rbd"><span class="glyphicon glyphicon-plus"></span> MySQL</a></li>
      </ul>
	</div>
</nav>
<?php }
}
?>