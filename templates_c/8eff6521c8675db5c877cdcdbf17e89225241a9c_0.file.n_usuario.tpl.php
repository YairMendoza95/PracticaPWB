<?php /* Smarty version 3.1.24, created on 2016-11-23 20:52:44
         compiled from "./templates/n_usuario.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46125835f38c07d918_77590892%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eff6521c8675db5c877cdcdbf17e89225241a9c' => 
    array (
      0 => './templates/n_usuario.tpl',
      1 => 1479930761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46125835f38c07d918_77590892',
  'variables' => 
  array (
    'modificar' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5835f38c119e90_88950435',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5835f38c119e90_88950435')) {
function content_5835f38c119e90_88950435 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46125835f38c07d918_77590892';
?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="row alert alert-info">
		<!--Inicio boton de cancelar-->
			<b class="col-md-7"><?php if ($_smarty_tpl->tpl_vars['modificar']->value) {?>Editar<?php } else { ?>Nuevo<?php }?> usuario</b>
			<form class="col-md-2" action="index.php?modulo=rbd" method="post">
				<button class="btn  btn-primary btn-lg" type="submit"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
			</form>
		<!--fin boton de cancelar-->
		</div>
		<form method="post" action="index.php?modulo=rbd&accion=guardar<?php if ($_smarty_tpl->tpl_vars['modificar']->value) {?>&id=<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario_id'];
}?>">
			<div class="form-group">
				<label for="nombre">Nombre Completo: </label>
				<input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre Completo" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
" />
			</div>
			<div class="form-group">
				<label for="usuario">Usuario: </label>
				<input type="text" id="usuario" class="form-control" name="usuario" placeholder="Nombre de usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
" />
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" id="password" class="form-control" name="password" placeholder="Password" />
			</div>
			<div class="text-center">
				<input type="hidden" id="accion" name="accion" value="guardar" />
				<button class="btn  btn-info btn-lg" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
			</div>
		</form>
	</div>
</div><?php }
}
?>