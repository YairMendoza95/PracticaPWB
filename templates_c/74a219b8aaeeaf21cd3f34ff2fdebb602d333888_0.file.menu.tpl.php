<?php /* Smarty version 3.1.24, created on 2016-11-22 20:04:45
         compiled from "./templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11421583496cd77d451_59750054%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74a219b8aaeeaf21cd3f34ff2fdebb602d333888' => 
    array (
      0 => './templates/menu.tpl',
      1 => 1479841464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11421583496cd77d451_59750054',
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_583496cdc5b084_50234744',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_583496cdc5b084_50234744')) {
function content_583496cdc5b084_50234744 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11421583496cd77d451_59750054';
?>
<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="$menu" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand"><span id="mrj"></span></span>
		</div>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="nav navbar-nav">
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "inicio") {?> class="active" <?php }?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "html") {?> class="active" <?php }?>><a href="index.php?modulo=html"><span class="glyphicon glyphicon-list"></span> Etiquetas HTML</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "insituciones") {?> class="active" <?php }?>><a href="index.php?modulo=instituciones"><span class="glyphicon glyphicon-education"></span> Instituciones</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "registro") {?> class="active" <?php }?>><a href="index.php?modulo=registro"><span class="glyphicon glyphicon-edit"></span> Registro</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "busqueda") {?> class="active" <?php }?>><a href="index.php?modulo=busqueda"><span class="glyphicon glyphicon-search"></span> Búsqueda</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "script") {?> class="active" <?php }?>><a href="index.php?modulo=script">[<span class="glyphicon glyphicon-console"></span>] JavaScript</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "jquery") {?> class="active" <?php }?>><a href="index.php?modulo=jquery"><span class="glyphicon glyphicon-save"></span> JQuery</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "rbd") {?> class="active" <?php }?>><a href="index.php?modulo=rbd"><span class="glyphicon glyphicon-plus"></span> MySQL</a></li>
			</ul>
		</div>
	</div>
</nav><?php }
}
?>