<?php
	//Administración de templates desde el modulo.

	$accion = isset($_POST['accion']) ? $_POST['accion'] : "";

	switch ($accion) {
		case 'registro':
			$oSmarty->assign("titulo", "Verificar");
			$oSmarty->assign("menu", "registro");
			$oSmarty->assign("accion", "verificar");
			$oSmarty->assign("registro",$_POST);
			$oSmarty->assign("contenido","revisar.tpl");
			break;
		case 'revisar':
			/*echo "<pre>";
			print_r($_POST);
			echo "</pre>";*/
			$oSmarty->assign("titulo", "Corregir");
			$oSmarty->assign("menu", "registro");
			$oSmarty->assign("accion", "registro");
			$oSmarty->assign("registro",$_POST);
			$oSmarty->assign("contenido","registro.tpl");
			break;
		
		default:
			$datos = array("nombre" => "", "apell1" => "",
				"apell2" => "", "domicilio" => "", "cp" => "", 
				"tel" => "", "mail" => "");
			$oSmarty->assign("titulo", "Registro");
			$oSmarty->assign("menu", "registro");
			$oSmarty->assign("accion", "registro");
			$oSmarty->assign("registro", $datos);
			$oSmarty->assign("contenido","registro.tpl");
			break;
	}

?>
