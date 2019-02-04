<?php 
include '../includes/header.php';
comprobarSesion();
?>
<div class="contenedor">
	<div class="row justify-content-center mb-3">
		<div class="col-6 text-center">
			<h3 class="titulo">Listado de articulos publicados</h3>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-12">
			<table class="table table-striped table-bordered table-sm table-hover">
				<thead class="thead-dark">
					<tr>
						<th class="text-center" scope="col">No.</th>
						<th class="text-center" scope="col">Titulo</th>
						<th class="text-center" scope="col">Extracto</th>
						<th class="text-center" scope="col">Fecha</th>
						<th class="text-center" scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="text-center" scope="row">1</th>
						<td class="text-center">PHP 7</td>
						<td class="text-justify">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum numquam commodi aperiam beatae, obcaecati harum?
						</td>
						<td class="text-center">
							29 de Enero del 2019
						</td>
						<td class="text-center">
							<a href="#" class="acciones">
								<i class="fas fa-edit"></i>
							</a>
							<a href="#" class="acciones">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include '../includes/footer.php'; ?>