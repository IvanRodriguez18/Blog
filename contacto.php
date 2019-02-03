<?php include 'includes/header.php'; ?>
<div class="contenedor">
	<div class="row justify-content-center mb-3">
		<div class="col-md-6">
			<h2 class="titulo-general text-center">Formulario de Contacto</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form id="contacto">
				<div class="row justify-content-center mb-3">
					<div class="col-6">
						<input type="text" name="nombre" class="form-control form-control-sm" id="nombre" placeholder="Nombre Completo">
					</div>
					<div class="col-6">
						<input type="email" name="correo" class="form-control form-control-sm" id="correo" placeholder="Correo Electrónico">
					</div>
				</div>
				<div class="row justify-content-center mb-3">
					<div class="col-12">
						<textarea name="mensaje" class="form-control form-control-sm" id="mensaje" placeholder="Mensaje"></textarea>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-4 text-center">
						<button type="submit" class="btn btn-danger btn-block">
							Enviar <i class="fab fa-telegram-plane"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>