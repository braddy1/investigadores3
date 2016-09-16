<?php
require("cabecera.php");
	$mensaje = $_REQUEST['error'];
?>
<head>
	<title>Color de Fondo de la página</title>
	<style type="text/css">
	body{
		background:ivory;
	}
	</style>
</head>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Registro </h3>

			<form class="form-horizontal" method='post' name='fregistro' id='fregistro' action='controller/checking.php' role='form'>
  				<div class="form-group">
					<label for="txt-nombres" class="col-sm-2 control-label">usuario :</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="txt-usuario" name="txt-usuario" placeholder="usuario" maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-password" class="col-sm-2 control-label">Password:</label>
					<div class="col-sm-3">
						<input type="password" class="form-control" id="txt-pasword" name="txt-password" placeholder="password" maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6 ">
						<button type="submit" class="btn btn-primary">ingresar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<span class="alert alert-danger"> <?php echo @$mensaje; ?> </span>
		</div>
	</div>
</div>


<?php
require("pie.php");
?>
