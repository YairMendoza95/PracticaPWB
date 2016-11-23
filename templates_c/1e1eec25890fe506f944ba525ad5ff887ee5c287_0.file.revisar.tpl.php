<?php /* Smarty version 3.1.24, created on 2016-11-11 15:16:42
         compiled from "./templates/revisar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6280624935826353a027150_66655272%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1eec25890fe506f944ba525ad5ff887ee5c287' => 
    array (
      0 => './templates/revisar.tpl',
      1 => 1478898994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6280624935826353a027150_66655272',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5826353a100634_32563063',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5826353a100634_32563063')) {
function content_5826353a100634_32563063 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6280624935826353a027150_66655272';
?>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-info">
			<form action="#" method="post">
			<div class="panel-heading text-center">
				<p style="font-size: 2.5em;">Verificar información</p>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tr>
						<th>Nombre</th>
						<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];?>

						<input type="hidden" id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];?>
"></td>
					</tr>
					<tr>
						<th>Apellido Paterno</th>
						<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['apell1'];?>

						<input type="hidden" id="apell1" name="apell1" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['apell1'];?>
"></td>
					</tr>
					<tr>
						<th>Apellido Materno</th>
						<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['apell2'];?>

						<input type="hidden" id="apell2" name="apell2" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['apell2'];?>
"></td>
					</tr>
					<tr>
						<th>Domicilio</th>
						<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['domicilio'];?>

						<input type="hidden" id="domicilio" name="domicilio" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['domicilio'];?>
"></td>
					</tr>
					<tr>
						<th>Código Postal</th>
						<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['cp'];?>

						<input type="hidden" id="cp" name="cp" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['cp'];?>
"></td>
					</tr>
					<tr>
						<th>Teléfono</th>
						<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['tel'];?>

						<input type="hidden" id="tel" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['tel'];?>
"></td>
					</tr>
					<tr>
						<th>Correo electrónico</th>
						<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['mail'];?>

						<input type="hidden" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['mail'];?>
"></td>
					</tr>
				</table>
			</div>
			<div class="panel-footer text-center">
				<input type="hidden" id="accion" name="accion" value="revisar">
				<button class="btn btn-primary btn-lg" type="submit"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</button>
				<button class="btn btn-primary btn-lg" type="button"><span class="glyphicon glyphicon-save"></span> Guardar</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php }
}
?>