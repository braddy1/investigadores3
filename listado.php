<?php 
  require("cabecera.php");
  require("menu.php");
?>
<h1><p class="text-center">LISTA </p></h1>
<?php if($_REQUEST){ ?>
<div class="row">
  <div class="alert alert-success text-center"><h3><?php echo @$_REQUEST['mensaje']; ?></h3></div>
</div> 
<?php }
?>
<table class="table table-hover col-lg-12">
    <thead bgcolor="#FF6600" class="text-center" style="font-weight:600;color:#FFF">
        <td>NOMBRES</td>
        <td>PATERNO</td>
        <td>MATERNO</td>        
        <td>TIPO DOCUMENTO</td>
        <td>NUMERO</td>
        <td>NACIONALIDAD</td>    
        <td>RESIDENTE</td>
        <td>OCUPACION</td>
        <td>ENTIDAD</td>
        <td>CORREO</td>
        <td>TELEFONO</td>
        <td>DIRECCION</td>
        <td ></td>
        <td ></td>
    </thead>

  <div class="container">
    <?php
     require("bd.php");
    if($resultado=$conexion->query("SELECT * FROM usuarios")){
      while($fila=$resultado->fetch_assoc()){
        echo"<tr><td>{$fila['nombres']}</td>
            <td>{$fila['paterno']}</td> 
            <td>{$fila['materno']}</td>
            <td>{$fila['tipo_documento']}</td>
            <td>{$fila['num_documento']}</td>
            <td>{$fila['nacionalidad']}</td>
            <td>{$fila['reside']}</td>
            <td>{$fila['ocupacion']}</td>
            <td>{$fila['entidad']}</td>
            <td>{$fila['email']}</td>
            <td>{$fila['telefono']}</td>
            <td>{$fila['direccion']}</td>

            <td><a href='listado2.php?id={$fila['usuario_id']}''><span class='btn btn-warning'>INFO</span></a>
            </td>
            <td><a href='modificar.formulario.php?id={$fila['usuario_id']}''><span class='btn btn-warning'>EDITAR</span></a>
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
<footer>
  <div class="col-md-12" style="height:45px; background:#330000; color:#FFF;">
      <div class="text-center"><h4>&copy; Copyright -INFORMATICA</h4></div>
    </div>
</footer>
  </div>

<?php
  require("pie.php");
?>
