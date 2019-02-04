<?php 
include '../includes/header.php'; 
if (isset($_SESSION['usuario'])) {
	header('Location:administrador.php');
}
?>
<div class="contenedor">
	<div class="row justify-content-center mb-3">
		<div class="col-6">
			<h2 class="titulo-general text-center">Inicia Sesión</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-6">
			<form id="login">
				<div class="form-row justify-content-center">
					<div class="form-group col-8">
						<label for="usuario">Usuario</label>
						<input type="text" name="usuario" id="usuario" class="form-control form-control-sm" placeholder="USUARIO">
					</div>
				</div>
				<div class="form-row justify-content-center">
					<div class="form-group col-8">
						<label for="contrasena">Contraseña</label>
						<input type="password" name="contrasena" id="contrasena" class="form-control form-control-sm" placeholder="CONTRASEÑA">
					</div>
				</div>
				<div class="form-row justify-content-center">
					<div class="form-group col-4">
						<button type="submit" class="btn btn-block btn-danger">
							Ingresar <i class="fas fa-sign-in-alt"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row justify-content-center mt-2">
		<div class="col-md-4 text-center">
			<a href="registro.php" class="enlace-login">Si no tienes cuenta Registrate aquí</a>
		</div>
	</div>
</div>
<?php include '../includes/footer.php'; ?>