
<?php
session_start();
	require("cabecera.php");
/*ROW ubicada en la linea 9 es una fila*/
	require("menu.php");/*requiere incrusta un archivo*/

	@$variable = $_SESSION['persona'];
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Registro de Nuevo Investigador</h3>
		</div>
	</div>

    <div class="row">
    	<div class="col-md-8">
			<form class="form-horizontal" method='post' name='fregistro' id='fregistro' action='controller/Police.php' role='form'>
			<p><?php echo "Usuario en uso:" . $variable; ?></p>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-2 control-label">Nombres :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-nombres" name="txt-nombres" placeholder="Nombres" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-paterno" class="col-sm-2 control-label">Paterno :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-paterno" name="txt-paterno" placeholder="paterno" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-materno" class="col-sm-2 control-label">Materno :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-materno" name="txt-materno" placeholder="materno"  required maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-2 control-label">Tipo Documento :</label>
					<div class="col-sm-6">
						<select name="txt-tipo_documento" class="form-control">
							<option selected="selectd">Seleccione:</option>
							<option value="DNI">DNI</option>
							<option value="Pasaporte">Pasaporte</option>
							<option value="Carnet Universitario">Carnet Universitario</option>
							<option value="Otro">Otro</option>
						</select>

					</div>
				</div>
				<div class="form-group">
					<label for="txt-num_documento" class="col-sm-2 control-label">Numero De Documento:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-num_documento" name="txt-num_documento" placeholder="numero" required  maxlength="35">
					</div>
				</div>
	            <div class="form-group">
					<label for="txt-nacionalidad" class="col-sm-2 control-label">Nacionalidad :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-nacionalidad" name="txt-nacionalidad" placeholder="Nacionalidad" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-reside" class="col-sm-2 control-label">Reside En :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-reside" name="txt-reside" placeholder="reside" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-ocupacion" class="col-sm-2 control-label">Ocupacion:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-ocupacion" name="txt-ocupacion" placeholder="ocupacion" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-entidad" class="col-sm-2 control-label">Entidad u Organismo :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-entidad" name="txt-entidad" placeholder="entidad" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-email" class="col-sm-2 control-label">Email :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-email" name="txt-email" placeholder="email" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-telefono" class="col-sm-2 control-label">Telefono Celular :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-telefono" name="txt-telefono" placeholder="telefono" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-direccion" class="col-sm-2 control-label">Direccion :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-direccion" name="txt-direccion" placeholder="direccion" required  maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6 ">
						<button type="submit" class="btn btn-primary">GUARDAR</button>
					</div>
				</div>
			</form>
    	</div>
        <div class="col-md-4">
        	FOTO
			<img src="img/FOTO.jpg" class="img-thumbnail" alt="FOTO" width="195" height="270">
        </div>
    </div>

	<div class="row">
		<div class="col-md-12">
			<ul class="row pager">
			    <li class="next"><a href="formulario.php">SIGUIENTE</a></li>
		  	</ul>
		</div>
	</div>
</div>

<?php
	require("pie.php");
?>

