<?php
	require("inc/bd.php");
		if($resultado=$conexion->query("SELECT * FROM usuarios WHERE usuario_id={$_GET['id']}")){
			echo"<pre>";print_r($resultado->fetch_assoc());echo"</pre>";
}else{
	echo"<div class='alert alert-danger'>Error al Editar</div>";
}
?>