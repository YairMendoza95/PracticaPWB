<?php
	echo "<pre>"; print_r($_SESSION);echo "</pre>";
	$oSmarty->assign("titulo", "Página principal");
	$oSmarty->assign("menu", "inicio");
	$oSmarty->assign("contenido","inicio.tpl");
?>
