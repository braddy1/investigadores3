<?php

	class Validar
	{
		private $mysqli;

		function __construct()
		{
			require_once "../inc/conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}

		public function Duplicados($paterno, $materno, $nombre,$numdoc){
			$sql = "SELECT usuario_id FROM usuarios WHERE paterno ='{$paterno}' AND materno= '{$materno}' AND nombres = '{$nombre}' AND num_documento = '{$numdoc}'";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		public function Listado(){
			$sql = "";
			$data = $this->mysqli->query($sql);
			return $data;
		}

		#La funcion (Metodo) recibe como parametro un array con los datos
		public function Insertar($datos){
			#1. Convertir de array a Datos
			#2. Crear el SQL

		}

		public function Modificar(){

		}

		public function Eliminar(){

		}
	}

?>