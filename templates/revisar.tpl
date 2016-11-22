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
						<td>{$registro.nombre}
						<input type="hidden" id="nombre" name="nombre" value="{$registro.nombre}"></td>
					</tr>
					<tr>
						<th>Apellido Paterno</th>
						<td>{$registro.apell1}
						<input type="hidden" id="apell1" name="apell1" value="{$registro.apell1}"></td>
					</tr>
					<tr>
						<th>Apellido Materno</th>
						<td>{$registro.apell2}
						<input type="hidden" id="apell2" name="apell2" value="{$registro.apell2}"></td>
					</tr>
					<tr>
						<th>Domicilio</th>
						<td>{$registro.domicilio}
						<input type="hidden" id="domicilio" name="domicilio" value="{$registro.domicilio}"></td>
					</tr>
					<tr>
						<th>Código Postal</th>
						<td>{$registro.cp}
						<input type="hidden" id="cp" name="cp" value="{$registro.cp}"></td>
					</tr>
					<tr>
						<th>Teléfono</th>
						<td>{$registro.tel}
						<input type="hidden" id="tel" name="tel" value="{$registro.tel}"></td>
					</tr>
					<tr>
						<th>Correo electrónico</th>
						<td>{$registro.mail}
						<input type="hidden" id="mail" name="mail" value="{$registro.mail}"></td>
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
