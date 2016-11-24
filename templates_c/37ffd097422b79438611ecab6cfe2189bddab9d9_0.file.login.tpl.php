<?php /* Smarty version 3.1.24, created on 2016-11-23 22:37:13
         compiled from "./templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3023558360c095c1432_91480111%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37ffd097422b79438611ecab6cfe2189bddab9d9' => 
    array (
      0 => './templates/login.tpl',
      1 => 1479937030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3023558360c095c1432_91480111',
  'variables' => 
  array (
    'error' => 0,
    'usuario' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58360c0962d602_34349567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58360c0962d602_34349567')) {
function content_58360c0962d602_34349567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3023558360c095c1432_91480111';
?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h3>Inicio de sesión</h3>
		<span><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
		<form action="" method="post">
			<div class="form-group">
				<label for="usuario">Usuario: </label>
				<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" />
			</div>
			<div class="form-group">
				<label for="password">Contraseña: </label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" />
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-send"></span> Entrar</button>
			</div>
		</form>
	</div>
</div>
<?php }
}
?>