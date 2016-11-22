<?php 
	require_once('include/Smarty.php');
	$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : "inicio";
	$ruta = dirname(__file__)."/modulos/{$modulo}.php";
	if(file_exists($ruta)){
		require_once $ruta;
	}
	else{
		$oSmarty -> assign("modulo", $modulo);
		$oSmarty -> assign("titulo","El modulo no existe");
		$oSmarty -> assign("contenido","noExiste.tpl");
	}
	$oSmarty -> assign("encabezado","encabezado.tpl");
	$oSmarty -> display("layout.tpl");
?>