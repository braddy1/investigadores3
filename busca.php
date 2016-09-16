<?php 
	require("cabecera.php");
	require("menu.php");
	
?>
<?php
require('conexion.php');


$consultaBusqueda = $_POST["valorBusqueda"];

$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);


$mensaje = "";
if (isset($consultaBusqueda)) {
	$consulta = mysqli_query($conexion, "SELECT * FROM mmv001
	WHERE nombre  LIKE '%$consultaBusqueda%' 
	OR apellido LIKE '%$consultaBusqueda%'
	OR CONCAT(nombre,' ',apellido)  LIKE '%$consultaBusqueda%'
	");

	$filas = mysqli_num_rows($consulta);
	if ($filas === 0) {
		$mensaje = "<p>No hay ningún usuario con ese nombre y/o apellido</p>";
	} else {
		
		echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

		while($resultados = mysqli_fetch_array($consulta)) {
			$nombre = $resultados['nombre'];
			$apellido = $resultados['apellido'];
			$edad = $resultados['edad'];

			$mensaje .= '
			<p>
			<strong>Nombre:</strong> ' . $nombre . '<br>
			<strong>Apellido:</strong> ' . $apellido . '<br>
			<strong>Edad:</strong> ' . $edad . '<br>
			</p>';

		};

	}; 

};


echo $mensaje;
?>
<?php
  require("pie.php");
?>
