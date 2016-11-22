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
                <input type="text" id="name" name="nombre" class="form-control" placeholder="Nombre (s)" value="{$registro.nombre}">
            </div>
            <div class="form-group">
                <label for="">Primer Apellido:</label>
                <input type="text" id="apell1" name="apell1" class="form-control" placeholder="Apellido Paterno" value="{$registro.apell1}">
            </div>
            <div class="form-group">
                <label for="apell2">Segundo Apellido:</label>
                <input type="text" id="apell2" placeholder="Apellido Materno" class="form-control" name="apell2" value="{$registro.apell2}">
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" id="domicilio" placeholder="Domicilio: (Calle, #, Colonia, Municipio, Estado)" class="form-control" name="domicilio" value="{$registro.domicilio}">
            </div>
            <div class="form-group">
                <label for="cp">Codigo Postal:</label>
                <input type="text" id="cp" placeholder="Código Postal" class="form-control" name="cp" class="CP" value="{$registro.cp}">
            </div>
            <div class="form-group">
                <label for="tel">Telefono:</label>
                <input type="text" id="tel" placeholder="Teléfono Personal" class="form-control" name="tel" class="tel" value="{$registro.tel}">
            </div>
            <div class="form-group">
                <label for="mail">e-mail:</label>
                <input type="text" id="mail" placeholder="Correo elecrónico" class="form-control" name="mail" class="mail" value="{$registro.mail}">
            </div>
            <div class="form-group">
                <label for="c_mail">Confirmar e-mail:</label>
                <input type="text" id="c_mail" placeholder="Confirmar correo" class="form-control" name="c_mail" class="mail" value="{$registro.mail}">
            </div>
            <button type="button" name="Borrar" value="Borrar" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-trash"></span> Borrar</button>
            <input type="hidden" name="accion" id="accion" value="{$accion}">
            <button type="submit" name="Enviar" value="Enviar" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-send"></span> Enviar</button>
        </form>
    </div>
</div>
