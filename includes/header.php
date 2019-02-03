<?php 
include 'funciones.php'; 
$pagina = obtenerPagina();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Blog</title>
	<?php if ($pagina == 'index' || $pagina == 'single' || $pagina == 'contacto'):?>
		<link rel="stylesheet" href="css/sweetalert2.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="js/all.min.js"></script>
	<?php else: ?>
		<link rel="stylesheet" href="../css/sweetalert2.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/estilos.css">
		<script src="../js/all.min.js"></script>
	<?php endif; ?>
</head>
<body>
	<header>
		<div class="contenedor">
			<?php if ($pagina == 'index' || $pagina == 'single' || $pagina == 'contacto'):?>
				<h1><a href="index.php">SoftBlogMx</a></h1>
				<div class="elementos">
					<input type="text" name="busqueda" id="busqueda" placeholder="Buscar Articulo....">
					<a href="#"><i class="fab fa-facebook-square"></i></a>
					<a href="https://github.com/IvanRodriguez18" target="_blank">
						<i class="fab fa-github"></i>
					</a>
					<a href="contacto.php"><i class="fas fa-envelope"></i></a>
				</div>
			<?php else: ?>
				<h1><a href="../index.php">SoftBlogMx</a></h1>
			<?php endif; ?>
		</div>
	</header>