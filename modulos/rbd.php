<?php 
	include_once dirname(__file__)."/../include/api/Usuario.class.php";
	$oUsuario = new Usuario();
	$accion = isset($_GET['accion']) ? $_GET['accion'] : "";
	switch ($accion) {
		case 'eliminar':
			$id = $_GET['id'];
			$oUsuario -> eliminar($id);
			$oSmarty -> assign("titulo", "");
			$oSmarty -> assign("menu", "");
			$oSmarty -> assign("contenido", "bco.tpl");
			header("Location:index.php?modulo=rbd");
			break;
		case 'guardar':
			$datos = $_POST;
			$id = isset($_GET['id']) ? $_GET['id'] : "";
			if ($id == "") {
				$oUsuario -> insertar($datos);
			}
			else{
				$oUsuario -> actualizar($datos, $id);
			}
			$oSmarty -> assign("titulo", "");
			$oSmarty -> assign("menu", "");
			$oSmarty -> assign("contenido", "bco.tpl");
			header("Location:index.php?modulo=rbd");
			break;
		case 'nuevo':
			$oSmarty -> assign("titulo", "Nuevo usuario");
			$oSmarty -> assign("menu", "rbd");
			$oSmarty -> assign("moificar", false);
			$oSmarty -> assign("usuario", array("usuario_id" => "", "nombre" => "", "usuario" => ""));
			$oSmarty -> assign("contenido", "n_usuario.tpl");
			break;
		case 'editar':
			$id = isset($_GET['id']) ? $_GET['id'] : "";
			$usuario = $oUsuario -> listar($id);
			$oSmarty -> assign("titulo", "Actualizar usuario");
			$oSmarty -> assign("menu", "rbd");
			$oSmarty -> assign("usuarios", $aUsuarios);
			$oSmarty -> assign("contenido", "rbd.tpl");
			break;
		
		default:
			# code...
			break;
	}
?>