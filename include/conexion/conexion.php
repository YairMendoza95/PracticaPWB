<?php
	include_once dirname(__file__) . "/../bd_config.php";

	$conexion = mysql_connect(SERVIDOR, USUARIO, PASSWORD) or die("Error al conectarse al servidor de MySQL");
	mysql_select_db("db_pwd") or die("No se encontro la BD especificada");

?>