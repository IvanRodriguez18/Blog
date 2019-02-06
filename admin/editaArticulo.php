<?php  
session_start();
include '../includes/header.php';
comprobarSesion();
$id_usuario = $_SESSION['id'];
?>
<div class="contenedor">
	<?php include 'includes/formulario.php'; ?>
</div>
<?php include '../includes/footer.php';?>