<?php 
	include_once dirname(__file__)."/../include/api/Usuario.class.php";
	$oSmarty -> assign("titulo", "Login");
	$oSmarty -> assign("menu", "login");
	if(empty($_POST)){
		$oSmarty -> assign("error", "");
		$oSmarty -> assign("usuario", "");
		$oSmarty -> assign("password", "");
		$oSmarty -> assign("contenido", "login.tpl");
	}
	else{
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

		$oUsuario = new Usuario();

		//validar los datos desde la clase usuario

		$dUsuario = $oUsuario -> validar($usuario, $password);
		$oSmarty -> assign("contenido", "bco.tpl");

		if(empty($dUsuario)){
			$oSmarty -> assign("error", "<div class=\"alert alert-danger\"<b>Usuario o password incorrectos</b></div>");
			$oSmarty -> assign("usuario", $usuario);
			$oSmarty -> assign("password", $password);
			$oSmarty -> assign("contenido", "login.tpl");
		}
		else{
			$_SESSION['usuario'] = $dUsuario[0];
			$oSmarty -> assign("contenido", "bco.tpl");
			header("Location:index.php");
		}
	}
?>