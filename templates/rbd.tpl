<div class="row">
	<div class="col-md-6 col-md-offset-2 text-center">
		<h2>Usuarios</h2>
	</div>
	<div class="col-md-2">
		<a href="index.php?pagina=rbd&accion=nuevo" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus-sign"></span> Usuario</a>
	</div>
</div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre Completo</th>
					<th>Usuario</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
			{assign var=i value=1}
			{foreach name="Usuarios" item="usuario" from=$usuarios}
			<tr>
				<td>{$i++}</td>
				<td>{$usuario.nombre}</td>
				<td>{$usuario.usuario}</td>
				<td>
					<a href="index.php?pagina=rbd&accion=eliminar&id={$usuario.usuario_id}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
					<a href="index.php?pagina=rbd&accion=editar&id={$usuario.usuario_id}" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>
				</td>
			</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>