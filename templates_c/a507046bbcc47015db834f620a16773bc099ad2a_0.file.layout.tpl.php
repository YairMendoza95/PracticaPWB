<?php /* Smarty version 3.1.24, created on 2016-09-28 14:23:16
         compiled from "./templates/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:133164572857ec18a46e90e3_39755925%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a507046bbcc47015db834f620a16773bc099ad2a' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1475090594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133164572857ec18a46e90e3_39755925',
  'variables' => 
  array (
    'titulo' => 0,
    'encabezado' => 0,
    'contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57ec18a47424a2_95619469',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57ec18a47424a2_95619469')) {
function content_57ec18a47424a2_95619469 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '133164572857ec18a46e90e3_39755925';
?>
<!DOCTYPE html />
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
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
	<?php echo $_smarty_tpl->getSubTemplate ("pie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>
<?php }
}
?>