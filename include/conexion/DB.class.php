<?php
	class BD{
		function query($sql, $regresarDatos = false){
			require_once dirname(__file__) . "/conexion.php";

			if($sql != ""){

				$oDatos = mysql_query($sql, $conexion);
				if($regresarDatos){
					$aDatos = array();
					$i = 0;
					while($rDatos = mysql_fetch_array($oDatos)){
						$aDatos[$i++] = $rDatos;
					}
					return $aDatos;
				}
			}else{
				return array();
			}
		}
	}
/*prueba de la clase BD
	$oBD = new BD();
	$datos = $oBD->query("select * from usuarios");
	echo "<pre>"; print_r($datos); echo "</pre>";*/
 ?>
