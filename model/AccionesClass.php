<?php

	class Acciones{

		private $mysqli;

		function __construct()
		{
			require_once "../inc/conexion.php";
			$conn = new Conexion();
			$this->mysqli = $conn->Conectar();
			return $this->mysqli;
		}
		function Validar($usuario,$passwd){
			$sql = "SELECT id, estado FROM loguin WHERE usuario='{$usuario}'  AND contraseña = '{$passwd}' LIMIT 1";
			$valor = $this->mysqli->query($sql);

			return $valor;
		}
        }
        function buscar() {
        	
         var textoBusqueda = $("input#busqueda").val();
 
     if (textoBusqueda != "") {
        $.post("busca.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
        };
      };
}
        


?>