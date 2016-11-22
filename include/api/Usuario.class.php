<?php 
	require_once dirname(__file__)."/../conexion/DB.class.php";
	class Usuario{
		function listar($id = ""){
			$oBD = new BD();
			$sql = "select * from usuarios";
			$sql .= $id == "" ? "order by nombre" : "where usuario_id = {$id} order by nombre";
			return $oBD -> query($sql, true);
		}

		function eliminar($id){
			$oBD = new BD();
			$sql = "delete from usuarios where usuario_id = {$id}";
			$oBD -> query($sql);
		}

		function insertar($datos){
			$oBD = new BD();
			$nombre = $datos['nombre'];
			$usuario = $datos['usuario'];
			$password = $datos['password'];
			$sql = "insert into usuarios (nombre, usuario, pswd) values ('{$nombre}', '{$usuario}', '{$password}')";
			$oBD -> query($sql);
		}
		
		function actualizar($datos, $id){
			$oBD = new BD();
			$nombre = $datos['nombre'];
			$usuario = $datos['usuario'];
			$password = $datos['password'];
			$sql = "update usuarios set nombre = '{$nombre}', usuario = '{$usuario}'";
			$sql .= $password == "" ? " " : ", password = '{$password}' ";
			$sql .= "where usuario_id = {$id}";
			$oBD -> query($sql);
		}
	}
?>