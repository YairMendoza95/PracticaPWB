<?php /* Smarty version 3.1.24, created on 2016-10-05 12:11:48
         compiled from "./templates/registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143903410857f53454b24f46_37508700%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9981a65eb6e57f406e400c1dc3c2b0d348e32f' => 
    array (
      0 => './templates/registro.tpl',
      1 => 1475093192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143903410857f53454b24f46_37508700',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57f53454bb6504_80415294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57f53454bb6504_80415294')) {
function content_57f53454bb6504_80415294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '143903410857f53454b24f46_37508700';
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>INFORMACIÓN</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3>Si quieres recibir la mejor informacion, registrate:</h3>
        <form action="#">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="nombre" class="form-control" placeholder="Nombre (s)">
            </div>
            <div class="form-group">
                <label for="">Primer Apellido:</label>
                <input type="text" id="apell1" name="apell1" class="form-control" placeholder="Apellido Paterno">
            </div>
            <div class="form-group">
                <label for="apell2">Segundo Apellido:</label>
                <input type="text" id="apell2" placeholder="Apellido Materno" class="form-control" name="apell2">
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" id="domicilio" placeholder="Domicilio: (Calle, #, Colonia, Municipio, Estado)" class="form-control" name="domicilio">
            </div>
            <div class="form-group">
                <label for="cp">Codigo Postal:</label>
                <input type="text" id="cp" placeholder="Código Postal" class="form-control" name="cp" class="CP">
            </div>
            <div class="form-group">
                <label for="tel">Telefono:</label>
                <input type="text" id="tel" placeholder="Teléfono Personal" class="form-control" name="tel" class="tel">
            </div>
            <div class="form-group">
                <label for="mail">e-mail:</label>
                <input type="text" id="mail" placeholder="Correo elecrónico" class="form-control" name="mail" class="mail">
            </div>
            <div class="form-group">
                <label for="c_mail">Confirmar e-mail:</label>
                <input type="text" id="c_mail" placeholder="Confirmar correo" class="form-control" name="c_mail" class="mail">
            </div>
            <button type="button" name="Borrar" value="Borrar" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
            <button type="button" name="Enviar" value="Enviar" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-send"></span> Enviar</button>
        </form>
    </div>
</div>
<?php }
}
?>