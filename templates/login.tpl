<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h3>Inicio de sesión</h3>
		<span>{$error}</span>
		<form action="" method="post">
			<div class="form-group">
				<label for="usuario">Usuario: </label>
				<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" value="{$usuario}" />
			</div>
			<div class="form-group">
				<label for="password">Contraseña: </label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" value="{$password}" />
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-send"></span> Entrar</button>
			</div>
		</form>
	</div>
</div>
