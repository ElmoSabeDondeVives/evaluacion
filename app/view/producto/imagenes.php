<div class="modal" tabindex="-1" role="dialog" id="agregar_imagen">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Agregar Imagen a <?= $nombre ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" enctype="multipart/form-data" id="formulario_img">
			<div class="modal-body">
				<div class="col-lg-12 text-center">
					<label for="imagen" class="col-form-label btn btn-warning mt-3"><i class="fa fa-upload"></i> Subir</label>
					<input class="form-control d-none" type="file" id="imagen" name="imagen" onchange="previewImage2(this,'visualizar')" maxlength="100">
				</div>
				<div class="col-lg-12">
					<img src="" id="visualizar" style="height: 250px">
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="id_producto" name="id_producto" value="<?=$_GET["id"]?>">
				<input type="hidden" id="id_imgproductos " name="id_imgproductos ">
				<button type="submit" class="btn btn-success" id="boton agregar_imagen"><i class="fa fa-save"></i> Guardar</button>
				<button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Cancelar</button>
			</div>
			</form>
		</div>
	</div>
</div>
<div class="container-fluid">
	<!-- /.row (main row) -->
	<div class="row">
		<div class="col-lg-12">
			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h5 class="m-0 font-weight-bold text-primary" style="color: #3487C9 !important">Imágenes de <?= $nombre?></h5>
				</div>

					<div class="card-body">
						<div class="row">
							<div class="col-lg-3" style="height: 180px; border: dashed">
								<a type="button" data-toggle="modal" data-target="#agregar_imagen" class="btn btn-warning text-white" onclick="limpiar2()" style="color: white; position: absolute; top: 45%; left: 8%"><i class="fa fa-plus"></i> Agregar</a>
							</div>
							<?php
							foreach ($imagenes as $i){
								?>
							<div class="col-lg-3" style="height: 180px; border: dashed; background: url(<?=_SERVER_. $i->imagen ?>) no-repeat; background-size: contain; background-position: center">
								<button onclick="preguntar('Seguro que desea eliminar esta imagen?', 'eliminar', 'Si','No','<?= $i->id_imgproductos ?>')" style="float: right; margin-top: 10px" class="btn btn-danger"><i class="fa fa-trash"></i></button>
							</div>
							<?php
							}
							?>
					</div>
			</div>
		</div>
	</div>
</div>
</div>

<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>productoimg.js"></script>
