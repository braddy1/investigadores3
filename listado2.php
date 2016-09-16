<?php 
  require("cabecera.php");
/*ROW ubicada en la linea 9 es una fila*/
  require("menu.php");/*requiere incrusta un archivo*/
?>
<h1><p class="text-center">LISTA</p></h1>
<?php if($_REQUEST){ ?>
<div class="row">
  <div class="alert alert-success text-center"><h3><?php echo @$_REQUEST['mensaje']; ?></h3></div>
</div> 
<?php }
?>
<table class="table table-hover col-lg-12">
    <thead bgcolor="#FF6600" class="text-center" style="font-weight:600;color:#FFF">
        <td>RECOMENDACIONES</td>
        <td>TIPO DE DOCUMENTO</td>
        <td>OBJETIVO</td>        
        <td>TEMA</td>
        <td>FECHA</td>
        <td>HORA</td>    
        <td>NUMERO DE HORA</td>
        <td>SECCION</td>
        <td>SERIE</td>
        <td>LEGAJO</td>
        <td>CAJA</td>
        <td>EXPEDIENTE</td>
        <td >LIBRO</td>
        <td >CUADERNO</td>
        <td >AÑO A BUSCAR</td>
        <td >ATENDIDO POR</td>
        <td >FECHA</td>
        <td >FOTOCOPIAS</td>
        <td >TRANSCRIPCION</td>
        <td >ESCANEO</td>
        <td >FOTOS</td>

    </thead>

     <div class="container">
     <?php require("inc/bd.php");
     if($resultado=$conexion->query("SELECT * FROM referencias")){
      while($fila=$resultado->fetch_assoc()){
        echo"<tr><td>{$fila['recomendacion']}</td>



            <td><a href='formulario.php?id={$fila['id_ref']}''><span class='btn btn-warning'>EDITAR</span></a>
            </td>
            

        </tr>";

      }
      echo "</table>";
    }
  
    else{
  ?> 
  <div class="alert alert-danger">no se puede obtener estudiantes</div>
  <?php
    }
    ?>
    <div class="container">
  <ul class="pager">
    <li class="previous"><a href="listado.php">ANTERIOR</a></li>
    
  </ul>
</div>     
<?php
  require("pie.php");
?>
