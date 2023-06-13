<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:12
 */
?>
<!-- Modal Agregar-->
<div class="modal fade" id="gestionProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar/Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data" id="formulario_producto">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="hidden" id="id_subcategoria" name="id_subcategoria" value="<?=$_GET["id"]?>">
                                            <input type="hidden" id="id_producto" name="id_producto">
                                            <h6 class="m-0 font-weight-bold text-primary" style="color: #3487C9 !important">
                                                Familia : <?= $nombrefam->familia_nombre ?> <br>
                                                Categoría : <?= $nombrecat->categoria_nombre ?> <br>
                                                Subcategoría : <?= $nombresub->subcategoria_nombre?>
                                            </h6>
                                            <label for="producto_nombre" class="col-form-label">Nombre del producto</label>
                                            <input class="form-control" type="text" id="producto_nombre" name="producto_nombre" maxlength="100">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="codigo_barra_producto" class="col-form-label">Código del Producto</label>
                                            <input class="form-control" type="text" id="codigo_barra_producto" name="codigo_barra_producto" maxlength="100">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="producto_precio" class="col-form-label">Precio Actual</label>
                                            <input class="form-control" type="text" id="producto_precio" name="producto_precio" maxlength="100">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="producto_descuento" class="col-form-label">Descuento %</label>
                                            <input class="form-control" type="text" id="producto_descuento" name="producto_descuento" maxlength="100" oninput="calcularPrecioAntiguo_Producto()">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="producto_precioantiguo" class="col-form-label">Precio Antiguo</label>
                                            <input class="form-control" type="text" id="producto_precioantiguo" name="producto_precioantiguo" maxlength="100">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="producto_stock" class="col-form-label">Stock</label>
                                            <input class="form-control" type="text" id="producto_stock" name="producto_stock" maxlength="100">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="producto_marca" class="col-form-label">Marca</label>
                                            <select class="form-control" id="producto_marca" name="producto_marca">
                                                <option value="">Escoger</option>
                                                <?php
                                                foreach ($marca as $n){
                                                    ?>
                                                    <option value="<?= $n->id_marca;?>"><?= $n->marca_nombre;?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="producto_reseña" class="col-form-label">Reseña</label>
                                            <textarea class="form-control" id="producto_reseña" name="producto_reseña" maxlength="100"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="producto_caracteristicas" class="col-form-label">Características</label>
                                            <textarea class="form-control" id="producto_caracteristicas" name="producto_caracteristicas" maxlength="100"></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="producto_detalle" class="col-form-label">Detalle</label>
                                            <textarea class="form-control" id="producto_detalle" name="producto_detalle" maxlength="100"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="producto_valoracion" class="col-form-label">Valoración</label>
                                            <div class="input-group" style="width: 55%">
                                                <button type="button" class="btn btn-sm btn-info" onclick="disminuirValoracion_Producto('producto_valoracion', 0.5)"><i class="fa fa-arrow-left"></i></button>
                                                <input class="form-control" type="text" id="producto_valoracion" name="producto_valoracion" value="4.5">
                                                <button type="button" class="btn btn-sm btn-info" onclick="aumentarValoracion_Producto('producto_valoracion', 0.5)"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="col-form-label">Estado</label>
                                            <select id="producto_estado" name="producto_estado" class="form-control" onchange="cambiar_color_estado('menu_estado')">
                                                <option value="">Escoger</option>
                                                <option value="1" style="background-color: #17a673; color: white;" selected>HABILITADO</option>
                                                <option value="0" style="background-color: #e74a3b; color: white;">DESHABILITADO</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <label for="producto_imagen" class="btn btn-warning mt-3"><i class="fa fa-upload"></i> Cargar Imagen</label>
                                            <input class="form-control d-none" onchange="previewImage(this,'visualizar')" type="file" id="producto_imagen" name="producto_imagen" maxlength="100">
                                        </div>
                                        <div class="col-lg-12">
                                            <img src="" id="visualizar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close fa-sm text-white-50"></i> Cerrar</button>
                    <button type="submit" class="btn btn-success" id="btn-agregar-producto"><i class="fa fa-save fa-sm text-white-50"></i> Guardar</button>
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
                <img src="" id="mostrarimg" width="320" height="380px">
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
                    <h6 style="font-size: 20px; color: #3487C9 !important" class="m-0 font-weight-bold text-primary">Lista de Productos Registrados</h6>
                    <h6 style="font-size: 20px; color: #3487C9 !important" class="m-0 font-weight-bold text-primary">Subcategoría : <?= $nombresub->subcategoria_nombre?></h6>
                    <button style="float: right; position: relative; margin-top: -40px" data-toggle="modal" id="botonmodal"  data-target="#gestionProducto" onclick="limpiar_Producto()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Agregar Nuevo</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-capitalize">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Código</th>
                                <th>Creador</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($productos as $m){
                                //Estilos para mostrar el estado del menú de forma dinamica
                                $estado = "DESHABILITADO";
                                $estilo_estado = "class=\"texto-deshabilitado\"";
                                $circulo = "<i class='fa fa-circle text-danger'></i>";
                                if($m->producto_estado == 1){
                                    $estado = "HABILITADO";
                                    $circulo = "<i class='fa fa-circle text-success'></i>";
                                    $estilo_estado = "class=\"texto-habilitado\"";
                                }
                                ?>
                                <tr>
                                    <td>
                                        <?=$circulo?>
                                        <?=$m->id_producto;?>
                                    </td>
                                    <td>
                                        <?= $m->producto_nombre;?> <br>
<!--                                        Valoracion del producto en estrellas-->
                                        <?php
                                        //En caso la valoracion sea mayor que 5 o menor que 0
                                        if ($m->producto_valoracion>5){
                                            for($i = 0; $i < 5; $i++){
                                                echo '<i class="fa fa-star text-warning" ></i>';
                                            }
                                        }elseif ($m->producto_valoracion<=0){
                                            for($i = 0; $i < 5; $i++){
                                                echo '<i class="fa fa-star-o" ></i>';
                                            }
                                        }else {
                                            $valoracion = $m->producto_valoracion;
                                            $entero = floor($valoracion); // Parte entera de $valoracion
                                            $decimal = $valoracion - $entero; // Parte fraccionaria de $valoracion
                                            //Pinta las estrellas enteras
                                            for ($i = 0; $i < $entero; $i++) {
                                                echo '<i class="fa fa-star text-warning"></i>';
                                            }
                                            //Pinta si hay estrella decimal
                                            if ($decimal >= 0.5 && $entero < 5) {
                                                echo '<i class="fa fa-star-half-o text-warning"></i>';
                                                $i++;
                                            }elseif($decimal < 0.5 && $entero<5){
                                                echo '<i class="fa fa-star-o " ></i>';
                                                $i++;
                                            }
                                            //Pinta solo si hay valoracion menor a 5
                                            for (; $i < 5; $i++) {
                                                echo '<i class="fa fa-star-o " ></i>';
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td><?= $m->marca_nombre;?></td>
                                    <td>
                                        Actual: S/<?= $m->producto_precio;?><br>
                                        Descuento: <?= $m->producto_descuento;?>%<br>
                                        Antes: <del>S/<?=$m->producto_precioantiguo;?></del>
                                    </td>
                                    <td><?=$m->producto_stock;?></td>
                                    <td>
                                        Producto:<br><?=$m->codigo_barra_producto?><br>
                                        Sistema:<br><?=$m->familia_serie."-".$m->codigo_barra_sistema?>
                                    </td>
                                    <td>
                                        <?=$m->usuario_nickname;?><br>
                                        <?=$m->producto_creacion;?>
                                    </td>
                                    <td>
                                        <?php
                                        $ruta = $m->producto_imagen;
                                        if ($ruta == 'media/productos/producto-sin-imagen.png'){
                                            echo '<p>Sin imagen <br>(Inserte en editar)</p>';
                                        }else{
                                            ?>
                                            <a type="button" data-toggle="modal" data-target="#modalver" class="btn btn-sm btn-info text-white" onclick="verimg(<?= $m->id_producto;?>)"><i class="fa fa-eye"></i></a> <br><br>
                                        <?php
                                        }
                                       ?>
                                    </td>
                                    <td>
                                        <a type="button" data-toggle="modal" data-target="#gestionProducto"  class="btn btn-sm btn-warning text-white" onclick="editarproducto(<?= $m->id_producto?>)"><i class="fa fa-pencil"></i> Editar</a> <br><br>
                                        <a class="btn btn-sm text-white btn-secondary" href="<?= _SERVER_?>Producto/imagenes/<?= $m->id_producto ?>"><i class="fa fa-image"></i> Añadir Imágenes</a>
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
<style>
    #visualizar {
        width: 50%;
    }
</style>
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>producto.js"></script>
<!--<script>-->
<!--    document.getElementById("botonmodal").onclick = function(){-->
<!--        alert('hola')}-->
<!--</script>-->
