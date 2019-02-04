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
			<?php elseif ($pagina == 'administrador'):?>
				<h1><a href="administrador.php">SoftBlogMx</a></h1>
				<div class="elementos">
					<div class="user-info">
						<img src="../img/BP.png" class="image-user rounded-circle">
						<span class="user-name">Chubambi95</span>
					</div>
					<div class="dropdown">
						<a href="#" class="btn btn-sm btn-block btn-danger dropdown-toggle" type="button" id="configuracion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Opciones de la Cuenta
						</a>
						<div class="dropdown-menu" aria-labelledby="configuracion">
							<a href="#" class="dropdown-item">
								<i class="icono-menu fas fa-user-cog"></i> Mi perfil
							</a>
							<a href="#" class="dropdown-item">
								<i class="icono-menu fas fa-file"></i> Nuevo articulo
							</a>
							<a href="logout.php" class="dropdown-item">
								<i class="icono-menu fas fa-sign-out-alt"></i> Salir
							</a>
						</div>
					</div>
				</div>
			<?php else: ?>
				<h1><a href="../index.php">SoftBlogMx</a></h1>
			<?php endif; ?>
		</div>
	</header>