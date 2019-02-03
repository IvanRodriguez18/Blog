<?php
include 'includes/funciones.php'; 
include 'includes/header.php';
$conecta = conexionBD();
$id = validaId($_GET['id']);
if (empty($id)) 
{
	header('Location:index.php');
}else{
	$sqlById = "SELECT articulos.*, usuarios.nombre 
						FROM articulos
						 INNER JOIN usuarios 
						 	ON articulos.id_usuario = usuarios.id_usuario 
						 	 WHERE articulos.id_articulo = '$id' LIMIT 1";
	$resultado = obtenById($sqlById, $conecta);
	$resultado = $resultado[0];
}
?>
<div class="contenedor">
	<div class="row justify-content-center mb-2">
		<div class="col-6">
			<div class="card">
				<img src="img/<?php echo $resultado['imagen']; ?>" class="card-img-top" alt="">
				<div class="card-body">
					<h5 class="titulo card-title"><?php echo $resultado['titulo']; ?></h5>
					<p class="card-text"><?php echo $resultado['texto']; ?></p>
					<p class="card-text">
						<small class="text-muted"><?php echo $resultado['nombre']; ?></small>
					</p>
				</div>
				<div class="card-footer">
					<small class="text-muted"><?php echo fecha($resultado['fecha_publicacion']); ?></small>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php';?>