<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:12
 */
?>
<!-- Modal Agregar-->
<div class="modal fade" id="gestionFamilia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Familia</h5>
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
                                            <input type="hidden" id="id_familia" name="id_familia">
                                            <label for="familia_nombre" class="col-form-label">Nombre de la Familia</label>
                                            <input class="form-control"  type="text" id="familia_nombre" name="familia_nombre" maxlength="100">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="familia_descripcion" class="col-form-label">Descripción</label>
                                            <textarea class="form-control" id="familia_descripcion" name="familia_descripcion" maxlength="100"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="familia_serie" class="col-form-label">Serie</label>
                                            <input class="form-control"  type="text" id="familia_serie" name="familia_serie" maxlength="100">
                                            <input class="form-control"  type="hidden" id="familia_correlativo" name="familia_correlativo" maxlength="100">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="familia_estado" class="col-form-label">Estado</label>
                                                <select id="familia_estado" name="familia_estado" class="form-control" onchange="cambiar_color_estado('menu_estado')">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close fa-sm text-white-50"></i> Cancelar</button>
                    <button type="button" class="btn btn-success" id="btn-agregar-familia" onclick="gestionar_familia()"    ><i class="fa fa-save fa-sm text-white-50"></i> Guardar</button>
                </div>
        </div>
    </div>
</div>
<!--Modal Editar-->
<div class="modal fade" id="editarFamilia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Familia</h5>
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
                                            <input type="hidden" id="id" name="id">
                                            <label for="nombre" class="col-form-label">Nombre de la Familia</label>
                                            <input class="form-control"  type="text" id="nombre" name="nombre" maxlength="100">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="descripcion" class="col-form-label">Descripción</label>
                                            <textarea class="form-control" id="descripcion" name="descripcion" maxlength="100"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="serie" class="col-form-label">Serie</label>
                                            <input class="form-control"  type="text" id="serie" name="serie" maxlength="100">
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="col-form-label">Estado</label>
                                            <select id="estado" name="estado" class="form-control" onchange="cambiar_color_estado('menu_estado')">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close fa-sm text-white-50"></i> Cancelar</button>
                    <button type="button" class="btn btn-success" id="btn-editar-familia" onclick="gestionar_familia_edit()"    ><i class="fa fa-save fa-sm text-white-50"></i> Guardar</button>
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
                    <h6 style="font-size: 20px; color: #3487C9 !important" class="m-0 font-weight-bold text-primary">Lista de Familias Registradas</h6>
                    <button style="float: right; position: relative; margin-top: -20px" data-toggle="modal" data-target="#gestionFamilia" onclick="cambiar_texto_formulario('exampleModalLabel', 'Agregar Familia'); agregacion_menu(); limpiarfamilia()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Agregar Nuevo</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-capitalize">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Serie</th>
                                <th>Correlativo</th>
                                <th>Opción</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($familias as $m){
                                //Estilos para mostrar el estado del menú de forma dinamica
                                $estado = "DESHABILITADO";
                                $estilo_estado = "class=\"texto-deshabilitado\"";
                                $circulo = "<i class='fa fa-circle text-danger'></i>";
                                if($m->familia_estado == 1){
                                    $estado = "HABILITADO";
                                    $estilo_estado = "class=\"texto-habilitado\"";
                                    $circulo = "<i class='fa fa-circle text-success'></i>";
                                }
                                ?>
                                <tr>
                                    <td>
                                        <?=$circulo?>
                                        <?= $m->id_familia;?>
                                    </td>
                                    <td><?= $m->familia_nombre;?></td>
                                    <td><?= $m->familia_descripcion;?></td>
                                    <td><?= $m->familia_serie;?></td>
                                    <td><?= $m->familia_correlativo;?></td>
                                    <td>
                                        <a  class="btn btn-sm text-white btn-info" href="<?= _SERVER_?>Categoria/inicio/<?= $m->id_familia ?>" ><i class="fa fa-eye"></i> Ver Categorías</a>
                                    </td>
                                    <td>
                                        <a type="button" data-toggle="modal" data-target="#editarFamilia" class="btn btn-sm text-white btn-warning" onclick="editarfamilia(<?= $m->id_familia?>)"><i class="fa fa-pencil"></i> Editar</a>
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
<!-- Fin de Contenido -->
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>familias.js"></script>
