<?php
  session_start();

  $codigo = $_SESSION['persona'];

	require("cabecera.php");
	require("menu.php");
?>
  <style type="text/css">
    body{
  	 background:ivory;
    }
  </style>

<div class="container">
    <div class="row">
      <div class="col-md-12">
         <h1><p class="text-center">BIENVENIDO A ARCHIVO HISTORICO</p></h1>
          <input type="hidden" name="codigo-usuario" value="<?php echo $codigo; ?>">

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
          <img src="img/3.jpg" alt="Pulpit Rock" style="width:400px;height:300px">
      </div>
      <div class="col-md-4">
          <img src="img/4.jpg" alt="Moustiers Sainte Marie" style="width:400px;height:300px">
      </div>
      <div class="col-md-4">
          <img src="img/5.jpg" alt="Cinque Terre" style="width:400px;height:300px">
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
          <img src="img/6.jpg" alt="Pulpit Rock" style="width:400px;height:300px">
      </div>
      <div class="col-md-4">
          <img src="img/7.jpg" alt="Moustiers Sainte Marie" style="width:400px;height:300px">
      </div>
      <div class="col-md-4">
          <img src="img/8.jpg" alt="Cinque Terre" style="width:400px;height:300px">
      </div>
    </div>

    <div class="row">
      <footer>
        <div class="col-md-12" style="height:45px; background:#330000; color:#FFF;">
          <div class="text-center"><h4>&copy; Copyright -INFORMATICA</h4></div>
        </div>
      </footer>
    </div>
</div>
