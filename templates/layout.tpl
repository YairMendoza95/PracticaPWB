<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalablew=no">
	<title>{$titulo}</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	{include file="menu.tpl"}
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{include file=$encabezado}
			</div>
		</div>
		{include file=$contenido}
	</div>
	{include file="footer.tpl"}
</body>
</html>