<?php

	require_once "../model/validar.php";

	$nombre         =$_POST['txt-nombres'];
    $paterno        =$_POST['txt-paterno'];
    $materno        =$_POST['txt-materno'];
    $tipo_documento =$_POST['txt-tipo_documento'];
    $num_documento  =$_POST['txt-num_documento'];
    $nacionalidad   =$_POST['txt-nacionalidad'];
    $reside         =$_POST['txt-reside'];
    $ocupacion      =$_POST['txt-ocupacion'];
    $entidad        =$_POST['txt-entidad'];
    $email          =$_POST['txt-email'];
    $telefono       =$_POST['txt-telefono'];
    $direccion      =$_POST['txt-direccion'];

    $agrupacion = array();
    $agrupacion = ["nombre" => $nombre,
    				"paterno" => $paterno,
    	];


	$validar = new Validar();
	$datos = $validar->Duplicados($paterno, $materno, $nombre, $num_documento);
	$validar->Insertar($agrupacion);

	$resultado = $datos->fetch_assoc();
	#echo $resultado['usuario_id'];

	if($resultado > 0){
		header("Location: ../formulario.php?codUsuario = ".$resultado['usuario_id']);
	}
	else{
		echo "No Existes el usuario.  Registrado Correcrtamente";
	}

?>