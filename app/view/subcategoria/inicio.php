<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:12
 */
?>
<!-- Modal Agregar Nuevo Menú-->
<div class="modal fade" id="gestionSubcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <h6 class="m-0 font-weight-bold text-primary" style="color: #3487C9 !important">
                                    Categoria : <?= $nombrecat->categoria_nombre?>
                                </h6>
                                <input type="hidden" id="id_categoria" name="id_categoria" value="<?=$id_categoria?>">
                                <input class="form-control" type="hidden" id="id_subcategoria" name="id_subcategoria" maxlength="11" >
                                <label for="subcategoria_nombre" class="col-form-label">Nombre de la SubCategoría</label>
                                <input class="form-control" type="text" id="subcategoria_nombre" name="subcategoria_nombre" maxlength="100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-form-label">Estado</label>
                                <select id="subcategoria_estado" name="subcategoria_estado" class="form-control" onchange="cambiar_color_estado('menu_estado')">
                                    <option value="">Escoger</option>
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
                <button type="button" class="btn btn-success" id="btn-agregar-subcategoria" onclick="gestionar_subcategoria()"><i class="fa fa-save fa-sm text-white-50"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- /.row (main row) -->
    <div class="row">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="font-size: 20px; color: #3487C9 !important" class="m-0 font-weight-bold text-primary">Lista de SubCategorías</h6>
                    <h6 style="font-size: 20px; color: #3487C9 !important" class="m-0 font-weight-bold text-primary">
                        Categoría : <?= $nombrecat->categoria_nombre?>
                    </h6>
                    <button style="float: right; position: relative; margin-top: -40px" onclick="limpiar3()" data-toggle="modal" data-target="#gestionSubcategoria"  class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Agregar Nuevo</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-capitalize">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Opción</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($subcategorias as $m){
                                //Estilos para mostrar el estado del menú de forma dinamica
                                $estado = "DESHABILITADO";
                                $estilo_estado = "class=\"texto-deshabilitado\"";
                                $circulo = "<i class='fa fa-circle text-danger'></i>";
                                if($m->subcategoria_estado == 1){
                                    $estado = "HABILITADO";
                                    $estilo_estado = "class=\"texto-habilitado\"";
                                    $circulo = "<i class='fa fa-circle text-success'></i>";
                                }
                                ?>
                                <tr>
                                    <td>
                                        <?= $circulo ?>
                                        <?= $m->id_subcategoria;?>
                                    </td>
                                    <td><?= $m->subcategoria_nombre;?></td>
                                    <td>
                                        <a  class="btn btn-sm text-white btn-info" href="<?=_SERVER_?>Producto/inicio/<?= $m->id_subcategoria ?>"><i class="fa fa-eye"></i> Ver Productos</a>
                                    </td>
                                    <td>
                                        <a <a type="button" data-toggle="modal" data-target="#gestionSubcategoria" class="btn btn-sm text-white btn-warning" onclick="editarsubcategoria(<?= $m->id_subcategoria?>)"><i class="fa fa-pencil"></i> Editar</a>
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

<!-- End of Main Content -->
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>subcategorias.js"></script>