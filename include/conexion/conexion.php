<?php 
	include_once dirname(__file__)."/../bd_config.php";
	$conexion = mysql_connect(SERVER, USER, PSW) or die("Error al conectarse al servidor");
	mysql_select_db("db_pwb") or die("No se encuentra la base de datos");
?>