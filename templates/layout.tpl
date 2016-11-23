<!DOCTYPE html />
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>{$titulo}</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body id="estilo">
	{include file="menu.tpl"}
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
    			{include file=$encabezado}
    		</div>
    	</div>
        {include file=$contenido}	
	</div>
	{include file="pie.tpl"}
</body>
</html>
