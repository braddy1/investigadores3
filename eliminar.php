<?php
	require("bd.php");
		if($conexion->query("DELETE FROM usuarios WHERE usuario_id={$_GET['id']}")){
			header("Location:listado.php");
}else{
	echo"<div class='alert alert-danger'>Error al Borrar</div>";
}
?>