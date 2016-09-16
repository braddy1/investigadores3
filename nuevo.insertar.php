<?php
	require_once ('inc/bd.php');

	#Recoger las variables
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

    echo $nombre         ."<br>";
    echo $paterno        ."<br>";
    echo $materno        ."<br>";
    echo $tipo_documento ."<br>";
    echo $num_documento  ."<br>";
    echo $nacionalidad   ."<br>";
    echo $reside         ."<br>";
    echo $ocupacion      ."<br>";
    echo $entidad        ."<br>";
    echo $email          ."<br>";
    echo $telefono       ."<br>";
    echo $direccion      ."<br>";


    /*

     if($conexion->query ("INSERT INTO usuarios SET nombres='{$nombre}', paterno='{$paterno}', materno='{$materno}',tipo_documento='{$tipo_documento}',num_documento='{$num_documento}',nacionalidad='{$nacionalidad}',reside='{$reside}',ocupacion='{$ocupacion}',entidad='{$entidad}',email='{$email}',telefono='{$telefono}',direccion='{$direccion}'"))
     {
     	header("Location: nuevo.formulario.php");
     }else{
     	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
     }

 $recomendacion=$_POST['txt-recomendacion'];
 if($conexion->query ("INSERT INTO referencias SET recomendacion='{$recomendacion}'")){
 	header("Location: formulario.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }


 $tipo_documento=$_POST['txt-tipo_documento']; $fecha=$_POST['txt-fecha']; $hora=$_POST['txt-hora'];
 $num_horas=$_POST['txt-num_horas'];
 if($conexion->query ("INSERT INTO acceso SET tipo_documento='{$tipo_documento}', fecha='{$fecha}', hora='{$hora}', num_horas='{$num_horas}'")){
 	header("Location: formulario.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }

 $seccion=$_POST['txt-seccion']; $serie=$_POST['txt-serie']; $legajo=$_POST['txt-legajo'];
 $caja=$_POST['txt-caja']; $expediente=$_POST['txt-expediente']; $lidro=$_POST['txt-lidro']; $cuaderno=$_POST['txt-cuaderno'];
 $año_buscar=$_POST['txt-año_buscar']; $atendido_po=$_POST['txt-atendido_po']; $fecha=$_POST['txt-fecha'];
 if($conexion->query ("INSERT INTO especificar SET seccion='{$seccion}', serie='{$serie}', legajo ='{$legajo}', caja='{$caja}', expediente='{$expediente}'
 	, lidro='{$lidro}', cuaderno='{$cuaderno}' ,año_buscar ='{$año_buscar}', atendido_po ='{$atendido_po}', fecha ='{$fecha}'")){
 	header("Location: formulario.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }


 $fotocopias=$_POST['txt-fotocopias']; $transcripcion=$_POST['txt-transcripcion']; $escaneo=$_POST['txt-escaneo'];
 $otro=$_POST['txt-otro']; $fotos=$_POST['txt-fotos'];
 if($conexion->query ("INSERT INTO reproduccion SET fotocopias='{$fotocopias}', transcripcion='{$transcripcion}', escaneo ='{$escaneo}', otro='{$otro}', fotos='{$fotos}'
 	")){
 	header("Location: formulario.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }

 $objetivo=$_POST['txt-objetivo'];
 if($conexion->query ("INSERT INTO objetivo SET objetivo='{$objetivo}'")){
 	header("Location: formulario.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }

 $tema=$_POST['txt-tema'];
 if($conexion->query ("INSERT INTO temas SET tema='{$tema}'")){
 	header("Location: formulario.php");
 }else{
 	echo"<h3> Error al guardar Nuevo Estudiante</h3>";
 }

 */
?>