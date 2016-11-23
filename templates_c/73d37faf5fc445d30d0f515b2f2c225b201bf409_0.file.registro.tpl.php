<?php /* Smarty version 3.1.24, created on 2016-11-11 15:17:05
         compiled from "./templates/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:42751443558263551b7eb89_26287165%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73d37faf5fc445d30d0f515b2f2c225b201bf409' => 
    array (
      0 => './templates/registro.tpl',
      1 => 1478899022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42751443558263551b7eb89_26287165',
  'variables' => 
  array (
    'registro' => 0,
    'accion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58263551c11f72_05248644',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58263551c11f72_05248644')) {
function content_58263551c11f72_05248644 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '42751443558263551b7eb89_26287165';
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>INFORMACIÓN</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3>Si quieres recibir la mejor informacion, registrate:</h3>
        <form method="post" action="#">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="nombre" class="form-control" placeholder="Nombre (s)" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];?>
">
            </div>
            <div class="form-group">
                <label for="">Primer Apellido:</label>
                <input type="text" id="apell1" name="apell1" class="form-control" placeholder="Apellido Paterno" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['apell1'];?>
">
            </div>
            <div class="form-group">
                <label for="apell2">Segundo Apellido:</label>
                <input type="text" id="apell2" placeholder="Apellido Materno" class="form-control" name="apell2" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['apell2'];?>
">
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" id="domicilio" placeholder="Domicilio: (Calle, #, Colonia, Municipio, Estado)" class="form-control" name="domicilio" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['domicilio'];?>
">
            </div>
            <div class="form-group">
                <label for="cp">Codigo Postal:</label>
                <input type="text" id="cp" placeholder="Código Postal" class="form-control" name="cp" class="CP" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['cp'];?>
">
            </div>
            <div class="form-group">
                <label for="tel">Telefono:</label>
                <input type="text" id="tel" placeholder="Teléfono Personal" class="form-control" name="tel" class="tel" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['tel'];?>
">
            </div>
            <div class="form-group">
                <label for="mail">e-mail:</label>
                <input type="text" id="mail" placeholder="Correo elecrónico" class="form-control" name="mail" class="mail" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['mail'];?>
">
            </div>
            <div class="form-group">
                <label for="c_mail">Confirmar e-mail:</label>
                <input type="text" id="c_mail" placeholder="Confirmar correo" class="form-control" name="c_mail" class="mail" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['mail'];?>
">
            </div>
            <button type="button" name="Borrar" value="Borrar" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
            <input type="hidden" name="accion" id="accion" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value;?>
">
            <button type="submit" name="Enviar" value="Enviar" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-send"></span> Enviar</button>
        </form>
    </div>
</div>
<?php }
}
?>