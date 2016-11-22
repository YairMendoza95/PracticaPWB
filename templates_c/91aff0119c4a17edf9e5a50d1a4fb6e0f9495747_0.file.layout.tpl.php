<?php /* Smarty version 3.1.24, created on 2016-11-21 11:47:47
         compiled from "./templates/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:294945832d0d31ed4f7_91913943%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91aff0119c4a17edf9e5a50d1a4fb6e0f9495747' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1479723139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294945832d0d31ed4f7_91913943',
  'variables' => 
  array (
    'titulo' => 0,
    'encabezado' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5832d0d3341867_40211481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5832d0d3341867_40211481')) {
function content_5832d0d3341867_40211481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '294945832d0d31ed4f7_91913943';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalablew=no">
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">

	<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/script.js"><?php echo '</script'; ?>
>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['encabezado']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>