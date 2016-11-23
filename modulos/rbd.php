<?php
	include_once dirname(__file__) . "/../include/api/Usuario.class.php";

	$oUsuario = new Usuario();
	$accion = isset($_GET['accion']) ? $_GET['accion'] : "";
	
	switch ($accion) {
		case 'eliminar':
			$id = $_GET['id'];
			$oUsuario->eliminar($id);
			$oSmarty->assign("titulo", "");
			$oSmarty->assign("menu", "");
			$oSmarty->assign("contenido", "bco.tpl");
			header("Location:index.php?pagina=rbd");
		break;

		case 'guardar':
			$datos = $_POST;
			$id = isset($_GET['id']) ? $_GET['id'] : "";
			
			if ($id == "")
				$oUsuario->insertar($datos);
			else
				$oUsuario->actualizar($datos, $id);

			$oSmarty->assign("titulo", "");
			$oSmarty->assign("menu", "");
			$oSmarty->assign("contenido", "bco.tpl");
			header("Location:index.php?pagina=rbd");
		break;

		case 'nuevo':
			$oSmarty->assign("titulo", "Nuevo usuario");
			$oSmarty->assign("menu", "rbd");
			$oSmarty->assign("modificar", false);
			$oSmarty->assign("usuario",array("usuario_id"=>"","nombre"=>"", "usuario"=> ""));
			$oSmarty->assign("contenido", "n_usuario.tpl");
		break;

		case 'editar':
			$id = isset($_GET['id']) ? $_GET['id'] : "";
			$usuario = $oUsuario->listar($id);
			$oSmarty->assign("titulo", "Actualizar información");
			$oSmarty->assign("menu", "rbd");
			$oSmarty->assign("modificar", true);
			$oSmarty->assign("usuario", $usuario[0]);
			$oSmarty->assign("contenido", "n_usuario.tpl");
		break;

		default:
			$aUsuarios = $oUsuario->listar();
			$oSmarty->assign("titulo", "Conexion con BD (MySQL)");
			$oSmarty->assign("menu", "rbd");
			$oSmarty->assign("usuarios", $aUsuarios);
			$oSmarty->assign("contenido","rbd.tpl");
		break;
	}

?>