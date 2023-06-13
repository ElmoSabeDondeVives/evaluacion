<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:12
 */
?>
<!-- Modal Agregar Nuevo Menú-->
<div class="modal fade" id="gestionCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar/Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input class="form-control" type="hidden" id="id_cliente" maxlength="11" readonly>
                                        <label for="cliente_nombre" class="col-form-label">Nombre del cliente</label>
                                        <input class="form-control" type="text" id="cliente_nombre" name="cliente_nombre" maxlength="100">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="cliente_numero" class="col-form-label">Número</label>
                                        <input class="form-control" type="text" id="cliente_numero" name="cliente_numero" maxlength="100">
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="cliente_correo" class="col-form-label">Correo</label>
                                        <input class="form-control" type="email" id="cliente_correo" name="cliente_correo" maxlength="50">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="cliente_documento" class="col-form-label">Tipo de documento</label>
                                        <select id="cliente_documento" name="cliente_documento" class="custom-select">
                                            <option>Escoger documento</option>
                                            <?php
                                            foreach ($documentos as $m){?>
                                                <option value="<?=$m->id_documento?>"><?=$m->documento_nombre?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label">Estado</label>
                                <select id="cliente_estado" name="cliente_estado" class="form-control" onchange="cambiar_color_estado('menu_estado')">
                                    <option value="1" style="background-color: #17a673; color: white;" selected>HABILITADO</option>
                                    <option value="0" style="background-color: #e74a3b; color: white;">DESHABILITADO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close fa-sm text-white-50"></i> Cerrar</button>
                <button type="button" class="btn btn-success" id="btn-agregar-cliente" onclick="gestionar_cliente()"><i class="fa fa-save fa-sm text-white-50"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $_SESSION['controlador'] . '/' . $_SESSION['accion'];?></h1>
        <button data-toggle="modal" data-target="#gestionCliente" onclick="cambiar_texto_formulario('exampleModalLabel', 'Agregar Nuevo Menú'); agregacion_menu()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Agregar Nuevo</button>
    </div>

    <!-- /.row (main row) -->
    <div class="row">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de Clientes Registrados</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-capitalize">
                            <tr>
                                <th>ID</th>
                                <th>Nombre Cliente</th>
                                <th>Tipo de Documento</th>
                                <th>Número</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($clientes as $m){
                                //Estilos para mostrar el estado del menú de forma dinamica
                                $estado = "DESHABILITADO";
                                $estilo_estado = "class=\"texto-deshabilitado\"";
                                if($m->cliente_estado == 1){
                                    $estado = "HABILITADO";
                                    $estilo_estado = "class=\"texto-habilitado\"";
                                }
                                ?>
                                <tr>
                                    <td><?= $m->id_cliente;?></td>
                                    <td><?= $m->cliente_nombre;?></td>
                                    <td><?= $m->cliente_tipo_documento;?></td>
                                    <td><?= $m->cliente_numero;?></td>
                                    <td><?= $m->correo;?></td>
                                    <td <?= $estilo_estado;?>><?= $estado;?></td>
                                    <td>
                                        <a type="button" data-toggle="modal" data-target="#gestionCliente" class="btn btn-sm btn-primary text-white" onclick="botoneditar(<?= $m->id_cliente;?>)">Editar </a>
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
<!-- /.container-fluid -->
<!-- End of Main Content -->
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>cliente.js"></script>