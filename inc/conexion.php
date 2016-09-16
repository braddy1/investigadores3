<?php
	define ('SERVIDOR','localhost');
	define ('USUARIO','root');
	define ('CLAVE','123');
	define ('BD','investigadores');

	class Conexion {

		public function Conectar() {
			#require_once ("config.php");
			$mysqli = new mysqli(SERVIDOR,USUARIO,CLAVE,BD);
			$mysqli->set_charset("utf8");

			if ($mysqli->connect_errno) {
				echo "Error al contenctar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
				exit();
			}

			#echo $mysqli->host_info. "Conexion Exitosa";
			return $mysqli;
		}
	}

?>
