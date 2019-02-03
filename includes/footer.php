<?php $pagina = obtenerPagina(); ?>
<?php if ($pagina == 'index' || $pagina == 'single' || $pagina == 'contacto'):?>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sweetalert2.all.min.js"></script>
	<script src="js/app.js"></script>
<?php else: ?>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/sweetalert2.all.min.js"></script>
	<script src="../js/app.js"></script>
<?php endif; ?>
</body>
</html>