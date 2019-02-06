<?php include '../includes/header.php'; ?>
<div class="contenedor">
	<div class="row justify-content-center mb-3">
		<div class="col-6">
			<h2 class="titulo-general text-center">Formulario de Registro</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-6">
			<form id="registro" enctype="multipart/form-data">
				  <div class="form-group row justify-content-center">
    				<label for="nombres" class="col-sm-2 col-form-label">Nombre(s)</label>
    				<div class="col-sm-8">
      					<input type="text" name="nombres" class="form-control form-control-sm" id="nombres" 
      					placeholder="Nombre Completo">
    				</div>
  				</div>
  				<div class="form-group row justify-content-center">
  					<label for="foto" class="col-sm-2 col-form-label">Imagen</label>
  					<div class="col-sm-8">
  						<input type="file" name="foto" id="foto" class="form-control-file form-control-sm">
  					</div>
  				</div>
  				<div class="form-group row justify-content-center">
  					<label for="correo" class="col-sm-2 col-form-label">Correo</label>
  					<div class="col-sm-8">
  						<input type="email" name="correo" class="form-control form-control-sm" id="correo" placeholder="Correo Electrónico">
  					</div>
  				</div>
  				<div class="form-group row justify-content-center">
  					<label for="usuario" class="col-sm-2 col-form.col-form-label">Usuario</label>
  					<div class="col-sm-8">
  						<input type="text" name="usuario" class="form-control form-control-sm" id="usuario" placeholder="Usuario">
  					</div>
  				</div>
  				<div class="form-group row justify-content-center">
  					<label for="password" class="col-sm-2 col-form-label">Contraseña</label>
  					<div class="col-sm-8">
  						<input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Contraseña">
  					</div>
  				</div>
  				<div class="form-row justify-content-center">
  					<div class="form-group col-sm-6 text-center">
  						<button type="submit" class="btn btn-danger btn-block">
  							Registrar <i class="fas fa-user-plus"></i>
  						</button>
  					</div>
  				</div>
			</form>
		</div>
	</div>
	<div class="row justify-content-center mt-2">
		<div class="col-md-4 text-center">
			<a href="login.php" class="enlace-login">Ir a Login</a>
		</div>
	</div>
</div>
<?php include '../includes/footer.php'; ?>