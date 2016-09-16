<?php
	session_start();

	$usuario = trim($_REQUEST['txt-usuario']);
	$password = trim($_REQUEST['txt-password']);

	require_once "../model/AccionesClass.php";
	$acciones = new Acciones();
	$valores = $acciones->Validar($usuario, $password);

    if($data['estado'] == 1){
		#Activo
		$_SESSION['persona'] = $data['id'];
		header("Location: ../bienvenido.php");
	}else{
		header("Location: ../index.php?error=El usuario no se encuentra Activo o No esta registrado");
	}
	

	
	if($numero['id'] > 0){
		echo "Usuario existe";
		$_SESSION['permiso'] = $numero['id'];
		header("Location: ../view/index.php");
	}else{
		echo "No existe el usario";
		header("Location: ../bienvenido.php");
	}
?>
