<?php /* Smarty version 3.1.24, created on 2016-10-27 19:26:27
         compiled from "./templates/busqueda.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:647976258129b33c6c8e3_91305371%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9370be28a734baa8a91d43c7a4aa083110dc64b' => 
    array (
      0 => './templates/busqueda.tpl',
      1 => 1475096040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647976258129b33c6c8e3_91305371',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_58129b33cb5d18_89173720',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58129b33cb5d18_89173720')) {
function content_58129b33cb5d18_89173720 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '647976258129b33c6c8e3_91305371';
?>
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">CATÁLOGO DE ARTE</h2>        
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form action="#">
            <div class="row">
                <div>
                    <label>Introduce los términos de busqueda:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="titulo2">Obra</label>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-tent"></span></div>
                        <input type="text" class="form-control" id="titulo2" name="titulo2" placeholder="Título">
                    </div>
                    <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
                    </div>
                </div>
                <div class="col-md-3 form-group">
                    <label for="tipo">Tipo</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="tipo" id="arq"> Arquitectura</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="tipo" id="pint"> Pintura</labe>
                    </div>
                    <div class="checkbox">  
                        <label><input type="checkbox" name="tipo" id="esc"> Escultura</label>
                    </div>
                </div>
                <div class="col-md-3 form-group">
                    <label for="disp">DISPONIBILIDAD</label>
                    <dic class="radio">
                        <label><input type="radio" name="disp">Museo / Acceso público</label>
                    </dic>
                    <div class="radio">
                        <label><input type="radio" name="disp">Colección privada</label>
                    </div>
                </div>
                <div class="col-md-3 form-group">
                    <label for="estilo">Estilo</label>
                    <select name="estilo" class="form-control">
                    <option value="0">Clásico</option>
                    <option value="1">Barroco</option>
                    <option value="2">Surrealista</option>
                    <option value="3">Otro</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 form-group">
                    <label for="txta">Háganos saber sus sugerencias:</label>
                    <textarea class="form-control" cols="50" rows="4" placeholder="Me gustaria indicar que..." ></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                         <button class="btn btn-success btn-lg" type="button"><span class="glyphicon glyphicon-search"></span> Buscar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
}
?>