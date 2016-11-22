<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="alert alert-info text-center"><b><span id="mrj">xD</span></b></div></div>
	</div>
</div>
<form class="row">
<div class="col-md-3">
	<div class="input-group">
		<div class="input-group-addon">#1</div>
		<input type="text" id="n1" class="form-control foco" placeholder="Ingresa un numero" /><br />
		<span id="en1"></span>
	</div>
</div>
<div class="col-md-3">
	<div class="input-group">
		<div class="input-group-addon">#2</div>
		<input type="text" id="n2" class="form-control foco" placeholder="Ingresa un numero" /><br />
		<span id="en2"></span>
	</div>
</div>
<div class="col-md-3">
	<p id="rst" class="form-control-static"></p>
</div>
<div class="col-md-3 text-center">
	<div class="btn-group" role="group">
		<button type="button" id="s" class="btn btn-primary btn-lg" onclick="operacion('+');"><span class="glyphicon glyphicon-plus"></span></button>
		<button type="button" id="r" class="btn btn-success btn-lg" onclick="operacion('-');"><span class="glyphicon glyphicon-minus"></span></button>
		<button type="button" id="m" class="btn btn-info btn-lg" onclick="operacion('*');"><span class="glyphicon glyphicon-asterisk"></span></button>
		<button type="button" id="d" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-italic"></span></button>
	</div>
</div>
</form>