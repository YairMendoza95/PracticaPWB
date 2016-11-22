<?php 
	$accion = isset($_POST['accion']) ? $_POST['accion'] : "";

	switch ($accion) {
		case 'registro':
			$oSmarty -> assign("titulo","Verificar");
			$oSmarty -> assign("menu","registro");
			$oSmarty -> assign("accion", "revisar");
			$oSmarty -> assign("registro",$_POST);
			$oSmarty -> assign("contenido","revisar.tpl");
			break;
		case 'revisar':
			$oSmarty -> assign("titulo","Corregir");
			$oSmarty -> assign("menu","registro");
			$oSmarty -> assign("accion","registro");
			$oSmarty -> assign("registro",$_POST);
			$oSmarty -> assign("contenido","registro.tpl");
			break;
		
		default:
			$datos = array("nombre" => "", "apell1" => "", "apell2" => "", "domicilio" => "", "cp" => "", "tel" => "", "mail" => "");
			$oSmarty -> assign("titulo","Registro");
			$oSmarty -> assign("menu", "registro");
			$oSmarty -> assign("accion", $datos);
			$oSmarty -> assign("contenido","registro.tpl");
			break;
	}
?>