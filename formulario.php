<?php
	require("cabecera.php");
/*ROW ubicada en la linea 9 es una fila*/
	require("menu.php");/*requiere incrusta un archivo*/

?>
<div class="container">
	<div class="row">
		<form class="form-horizontal" method='post' name='fregistro' id='fregistro' action='nuevo.insertar.php' role='form'>
			<div class="col-xs-12 col-sm-12 col-md-6">
			    <h3>REFERENCIAS</h3>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-4 control-label">RECOMENDACIONES :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-recomendacion" name="txt-recomendacion" placeholder="recomendaciones" maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-6 ">
						<button type="submit" class="btn btn-primary">GUARDAR</button>
					</div>
				</div>
				<h3>ACCESO</h3>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-4 control-label">ACCESO A  DOCUMENTO DE:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-tipo_documento" name="txt-tipo_documento" placeholder="tipo de documento" maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-objetivo" class="col-sm-4 control-label">OBJETIVO DE SU INVESTIGACION :</label>
					<div class="col-sm-6">
					  <select name="txt-objetivo" class="form-control">
							<option selected="selectd">Seleccione:</option>
							<option value="Tesis">TESIS</option>
							<option value="Monografia">MONOGRAFIA</option>
							<option value="Practicas">PRACTICAS</option>
							<option value="Publicacion">PUBLICACION</option>
							<option value="Otro">OTRO</option>
					   </select>

					</div>
				</div>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-4 control-label">TEMA DE SU INVESTIGACION :</label>
					<div class="col-sm-6">
						<select name="txt-objetivo" class="form-control">
							<option selected="selectd">Seleccione:</option>
							<option value="Social">SOCIAL</option>
							<option value="Economico">ECONOMICO</option>
							<option value="Politico">POLITICO</option>
							<option value="Cultural">CULTURAL</option>
							<option value="Otro">OTRO</option>
					   </select>
					</div>
				</div>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-4 control-label">FECHA:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" maxlength="35">

					</div>
				</div>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-4 control-label">NUMERO DE HORAS INVESTIGADAS :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="txt-mun_horas" name="txt-mun_horas" placeholder="numero de horas" maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-nombres" class="col-sm-4 control-label">HORA :</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" maxlength="35">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-6 ">
						<button type="submit" class="btn btn-primary">GUARDAR</button>
					</div>
				</div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h3>ESPECIFICACIONES</h3>
					<div class="form-group">
						<label for="txt-seccion" class="col-sm-4 control-label">SECCION :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-seccion" name="txt-seccion" placeholder="seccion" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">SERIE :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-serie" name="txt-serie" placeholder="serie" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">LEGAJO :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-lejajo" name="txt-legajo" placeholder="legajo" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">CAJA :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-caja" name="txt-caja" placeholder="caja" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">EXPEDIENTE:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-expediente" name="txt-expediente" placeholder="expediente" maxlength="35">

						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">LIBRO :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-libro" name="txt-libro" placeholder="libro" maxlength="35">
							</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">CUADRENO :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-cuaderno" name="txt-cuaderno" placeholder="cuaderno" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">AÑO A BUSCAR :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-año_buscar" name="txt-año_buscar" placeholder="año a buscar" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">ATENDIDO POR :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-atendico_po" name="txt-atendido_po" placeholder="atendido por" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">FECHA :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-fecha" name="txt-fecha" placeholder="fecha" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-6 ">
							<button type="submit" class="btn btn-primary">GUARDAR</button>
						</div>
					</div>
				<h3>REPRODUCCION</h3>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">FOTOCOPIAS :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-fotocopias" name="txt-fotocopias" placeholder="cantidad" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">TRANSCRIPCION :</label>
						<div class="col-sm-6">
							<select name="txt-trancripcion" class="form-control">
							  <option selected="selectd">Seleccione:</option>
							  <option value="Si">SI</option>
							  <option value="No">NO</option>
					        </select>
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">ESCANEO :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-escaneo" name="txt-escaneo" placeholder="cantidad" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<label for="txt-nombres" class="col-sm-4 control-label">FOTOS :</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="txt-fotos" name="txt-fotos" placeholder="" maxlength="35">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-6 ">
							<button type="submit" class="btn btn-primary">GUARDAR</button>
						</div>
					</div>
			</div>
		</form>
	</div>
</div>
<div class="container">
  <ul class="pager">
    <li class="previous"><a href="nuevo.formulario.php">ANTERIOR</a></li>
  </ul>
</div>
<?php
	require("pie.php");
?>