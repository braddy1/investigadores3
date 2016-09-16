
	<?php
	/*realiza conexion a la B. D.*/
	define ('SERVIDOR','localhost');
	define ('USUARIO','root');
	define ('CLAVE','123');
	define ('BD','investigadores');
	$conexion= new mysqli(SERVIDOR,USUARIO,CLAVE,BD);

	if($conexion-> connect_errno)
	{
		printf("Error al conectar B.D.:%s\n", $conexion-> connect_errno);
		exit();
	}

		echo "<h1></h1>";
	?>