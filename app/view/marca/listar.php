<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:12
 */
?>
<!-- Modal Agregar-->
<div class="modal fade" id="gestionMarca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar/Editar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" enctype="multipart/form-data" id="formulario_marca">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-4">
											<input type="hidden" id="id_marca" name="id_marca">
											<label for="marca_nombre" class="col-form-label">Nombre de la Marca</label>
											<input onkeyup="mayuscula(this.id)" class="form-control" type="text" id="marca_nombre" name="marca_nombre" maxlength="100">
										</div>
                                        <div class="col-lg-4">
                                            <label for="marca_estado" class="col-form-label">Estado</label>
                                            <select id="marca_estado" name="marca_estado" class="form-control" onchange="cambiar_color_estado('menu_estado')">
                                                <option value="">Escoger</option>
                                                <option value="1" style="background-color: #17a673; color: white;" selected>HABILITADO</option>
                                                <option value="0" style="background-color: #e74a3b; color: white;">DESHABILITADO</option>
                                            </select>
                                        </div>
										<div class="col-lg-4">
											<div class="d-flex align-items-center justify-content-center mt-4">
                                                <label for="marca_imagen" class="btn btn-warning"><i class="fa fa-upload"></i> Cargar Imagen</label>
                                                <input class="form-control d-none" onchange="previewImageMarca(this,'visualizar')" type="file" id="marca_imagen" name="marca_imagen">
                                            </div>
										</div>
										<div class="col-lg-12 text-center">
											<img src="" id="visualizar">
										</div>
                                        <div class="col-lg-12">
                                            <div class="row" id="input_check">
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close fa-sm text-white-50"></i> Cerrar</button>
					<button type="submit" class="btn btn-success" id="btn-agregar-marca"><i class="fa fa-save fa-sm text-white-50"></i> Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal ver imagen-->
<div class="modal fade" id="modalver" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Imagen del Producto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="" id="mostrarimg" width="400px" height="250px">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--Contenido-->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 style="font-size: 20px" class="m-0 font-weight-bold text-primary">Lista de Marcas Registradas</h6>
					<button style="float: right; position: relative; margin-top: -28px" data-toggle="modal" data-target="#gestionMarca" onclick="cambiar_texto_formulario('exampleModalLabel', 'Agregar/Editar');limpiarcontenidomarca(); abrirmodalagg()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Agregar Nuevo</button>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
							<thead class="text-capitalize">
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Imagen</th>
								<th>Opción</th>
							</tr>
							</thead>
							<tbody>
							<?php
							foreach ($listarmarcas as $m){
								$estado = "DESHABILITADO";
								$estilo_estado = "class=\"texto-deshabilitado\"";
								$circulo = "<i class='fa fa-circle text-danger'></i>";
								if($m->marca_estado == 1){
									$estado = "HABILITADO";
									$estilo_estado = "class=\"texto-habilitado\"";
									$circulo = "<i class='fa fa-circle text-success'></i>";
								}
								?>
								<tr>
									<td>
										<?= $circulo ?>
										<?= $m->id_marca;?>
									</td>
									<td><?= $m->marca_nombre;?></td>
									<td>
										<?php
										$ruta = $m->marca_imagen;
										if ($ruta == null){
											echo '<p>Sin imagen <br>(Inserte en editar)</p>';
										}else{
											?>
											<a type="button" data-toggle="modal" data-target="#modalver" class="btn btn-sm text-white btn-info" onclick="verimgmarca('<?= $m->marca_imagen;?>')"> <i class="fa fa-eye"></i></a>
											<?php
										}
										?>
									</td>
									<td>
										<a type="button" data-toggle="modal" data-target="#gestionMarca" class="btn btn-sm text-white btn-warning" onclick="editarmarca(<?= $m->id_marca?>);"><i class="fa fa-pencil"></i> Editar</a>
									</td>
								</tr>
								<?php
							}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Fin de Contenido -->

<style>
    #visualizar {
        width: 50%;
    }
</style>
<script>
    let datos = JSON.parse( '<?= $datos ?>')
    console.log(datos)
</script>
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>marca.js"></script>
