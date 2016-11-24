<?php
	session_start();
	require_once('include/smarty.php');

	$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : "inicio";

	$rutaModulo = dirname(__FILE__)."/modulos/{$modulo}.php";

	if(file_exists($rutaModulo)){
		require_once $rutaModulo;
	} else {
		$oSmarty -> assign("modulo", $modulo);
		$oSmarty -> assign("titulo", "El modulo no existe");
		$oSmarty -> assign("contenido", "noExiste.tpl");
	}

	$oSmarty -> assign("encabezado", "encabezado.tpl");
	$oSmarty->display('layout.tpl');
?>
