<div class="row justify-content-center">
	<div class="col-6">
		<h2 class="titulo-general text-center">
			<?php echo ($pagina == 'nuevoArticulo') ? 'Publica Articulo' : 'Edita Articulo'; ?>
		</h2>
	</div>
</div>
<div class="row justify-content-center mt-2">
	<div class="col-6">
		<form id="form-articulo" enctype="multipart/form-data">
			<div class="form-row justify-content-center">
				<div class="form-group col-sm-10">
					<label for="titulo">Titulo</label>
					<input type="hidden" name="usuario" value="<?php echo $id_usuario; ?>">
					<input type="text" name="titulo" id="titulo" class="form-control form-control-sm" placeholder="Titulo del articulo">
				</div>
			</div>
			<div class="form-row justify-content-center">
				<div class="form-group col-sm-10">
					<label for="extracto">Extracto</label>
					<textarea name="extracto" id="extracto" class="form-control form-control-sm" placeholder="Extracto del articulo"></textarea>
				</div>
			</div>
			<div class="form-row justify-content-center">
				<div class="form-group col-sm-10">
					<label for="texto">Texto</label>
					<textarea name="texto" id="texto" class="form-control form-control-sm" placeholder="Texto del articulo"></textarea>
				</div>
			</div>
			<div class="form-group row justify-content-center">
  				<label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
  				<div class="col-sm-8">
  					<input type="file" name="imagen" id="imagen" class="form-control-file form-control-sm">
  				</div>
  			</div>
  			<div class="form-row justify-content-center">
				<div class="form-group col-sm-5 text-center">
					<?php if ($pagina == 'nuevoArticulo'):?>
						<input type="hidden" id ="accion" name="accion" value="insertar">
						<button type="submit" class="btn btn-block btn-sm btn-danger">Publicar</button>
					<?php else: ?>
						<input type="hidden" id ="accion" name="accion" value="actualizar">
						<button type="submit" class="btn btn-block btn-sm btn-danger">Actualizar</button>
					<?php endif; ?>
				</div>
			</div>
		</form>
	</div>
</div>