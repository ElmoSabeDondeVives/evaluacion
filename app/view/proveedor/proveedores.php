<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:12
 */
?>
<!-- Modal Agregar-->
<div class="modal fade" id="gestionProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Agregar/Editar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" enctype="multipart/form-data" id="formulario_proveedor">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<input type="hidden" id="id_proveedor" name="id_proveedor">
											<label for="proveedor_nombre" class="col-form-label">Nombre del proveedor</label>
											<input class="form-control" type="text" id="proveedor_nombre" name="proveedor_nombre" maxlength="100">
										</div>
                                        <div class="col-lg-12">
                                            <label for="proveedor_direccion" class="col-form-label">Dirección</label>
                                            <input class="form-control" type="text" id="proveedor_direccion" name="proveedor_direccion" maxlength="100">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="proveedor_telefono" class="col-form-label">Teléfono</label>
                                            <input class="form-control" type="text" id="proveedor_telefono" name="proveedor_telefono" maxlength="100">
                                        </div>
										<div class="col-lg-6">
											<label for="proveedor_estado" class="col-form-label">Estado</label>
											<select id="proveedor_estado" name="proveedor_estado" class="form-control" onchange="cambiar_color_estado('menu_estado')">
												<option value="">Escoger</option>
												<option value="1" style="background-color: #17a673; color: white;" selected>HABILITADO</option>
												<option value="0" style="background-color: #e74a3b; color: white;">DESHABILITADO</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close fa-sm text-white-50"></i> Cerrar</button>
					<button type="submit" class="btn btn-success" id="btn-agregar-proveedor"><i class="fa fa-save fa-sm text-white-50"></i> Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--Contenido-->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h5 style="font-size: 20px; color: #3487C9 !important" class="m-0 font-weight-bold text-primary">LISTA DE TODOS LOS PROVEEDORES REGISTRADOS</h5>
					<button style="float: right; position: relative; margin-top: -28px" data-toggle="modal" data-target="#gestionProveedor" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Agregar Nuevo</button>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
							<thead class="text-capitalize">
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Dirección</th>
								<th>Teléfono</th>
								<th>Opciones</th>
							</tr>
							</thead>
							<tbody>
							<?php
							foreach ($proveedores as $p){
								//Estilos para mostrar el estado del menú de forma dinamica
								$estado = "DESHABILITADO";
								$estilo_estado = "class=\"texto-deshabilitado\"";
								$circulo = "<i class='fa fa-circle text-danger'></i>";
								if($p->proveedor_estado == 1){
									$estado = "HABILITADO";
									$circulo = "<i class='fa fa-circle text-success'></i>";
									$estilo_estado = "class=\"texto-habilitado\"";
								}
								?>
								<tr>
									<td>
                                        <?=$circulo;?>
                                        <?=$p->id_proveedor;?>
                                    </td>
									<td><?=$p->proveedor_nombre;?></td>
									<td><?=$p->proveedor_direccion;?></td>
									<td><?=$p->proveedor_telefono;?></td>
									<td>
                                        <a type="button" data-toggle="modal" data-target="#gestionProveedor"  class="btn btn-sm btn-warning text-white" onclick="editarproveedor(<?= $p->id_proveedor?>)"><i class="fa fa-pencil"></i> Editar</a>
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
<!--Fin de contenido-->
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>proveedores.js"></script>
