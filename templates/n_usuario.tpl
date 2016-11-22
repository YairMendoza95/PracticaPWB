<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="row alert alert-info">
		<!--Inicio boton de cancelar-->
			<b class="col-md-7">{if $modificar}Editar{else}Nuevo{/if} usuario</b>
			<form class="col-md-2" action="index.php?pagina=rbd" method="post">
				<button class="btn  btn-primary btn-lg" type="submit"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
			</form>
		<!--fin boton de cancelar-->
		</div>
		<form method="post" action="index.php?pagina=rbd&accion=guardar{if $modificar}&id={$usuario.usuario_id}{/if}">
			<div class="form-group">
				<label for="nombre">Nombre Completo: </label>
				<input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre Completo" value="{$usuario.nombre}" />
			</div>
			<div class="form-group">
				<label for="usuario">Usuario: </label>
				<input type="text" id="usuario" class="form-control" name="usuario" placeholder="Nombre de usuario" value="{$usuario.usuario}" />
			</div>
			<div class="form-group">
				<label for="password">Password: </label>
				<input type="password" id="password" class="form-control" name="password" placeholder="Password" />
			</div>
			<div class="text-center">
				<input type="hidden" id="accion" name="accion" value="guardar" />
				<button class="btn  btn-info btn-lg" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
			</div>
		</form>
	</div>
</div>