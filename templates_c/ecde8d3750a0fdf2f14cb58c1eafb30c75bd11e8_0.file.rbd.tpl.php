<?php /* Smarty version 3.1.24, created on 2016-11-17 14:54:16
         compiled from "./templates/rbd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1611434683582e18f8758e91_99866863%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecde8d3750a0fdf2f14cb58c1eafb30c75bd11e8' => 
    array (
      0 => './templates/rbd.tpl',
      1 => 1479415464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1611434683582e18f8758e91_99866863',
  'variables' => 
  array (
    'usuarios' => 0,
    'i' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_582e18f87badd4_57844047',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582e18f87badd4_57844047')) {
function content_582e18f87badd4_57844047 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1611434683582e18f8758e91_99866863';
?>
<div class="row">
	<div class="col-md-6 col-md-offset-2 text-center">
		<h2>Usuarios</h2>
	</div>
	<div class="col-md-2">
		<a href="index.php?pagina=rbd&accion=nuevo" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Usuario</a>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre Completo</th>
					<th>Usuario</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>
		<?php
$_from = $_smarty_tpl->tpl_vars['usuarios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["usuario"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["usuario"]->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars["usuario"]->value) {
$_smarty_tpl->tpl_vars["usuario"]->_loop = true;
$foreach_usuario_Sav = $_smarty_tpl->tpl_vars["usuario"];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
</td>
				<td>
					<a href="index.php?pagina=rbd&accion=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario_id'];?>
" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
					<a href="index.php?pagina=rbd&accion=editar&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario_id'];?>
" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
				</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars["usuario"] = $foreach_usuario_Sav;
}
?>
			</tbody>
		</table>
	</div>
</div><?php }
}
?>