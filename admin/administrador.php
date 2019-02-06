<?php 
session_start();
include '../includes/header.php';
comprobarSesion();
$conecta = conexionBD();
$id_usuario = $_SESSION['id'];
$sql = "SELECT * FROM articulos WHERE id_usuario='$id_usuario' ORDER BY id_articulo DESC";
$registros = obtenById($sql, $conecta);
?>
<div class="contenedor">
	<?php if ($registros !== false):?>
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
					<?php foreach ($registros as $registro):?>
					<tr>
						<th class="text-center" scope="row"><?php echo $registro['id_articulo']; ?></th>
						<td class="text-center"><?php echo $registro['titulo']; ?></td>
						<td class="text-justify"><?php echo $registro['extracto']; ?></td>
						<td class="text-center"><?php echo fecha($registro['fecha_publicacion']); ?></td>
						<td class="text-center">
							<a href="#" class="acciones">
								<i class="fas fa-edit"></i>
							</a>
							<a href="#" class="acciones">
								<i class="fas fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
	<?php else: ?>
		<div class="row justify-content-center">
			<div class="col-6">
				<div class="alert alert-danger text-center" role="alert">
					Aún no has publicado ningún articulo
					<a href="nuevoArticulo.php" class="alert-link">Nuevo Articulo Aquí</a>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>
<?php include '../includes/footer.php'; ?>