<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:12
 */
?>
<form method="post" enctype="multipart/form-data" id="formularrio_formato_ingreso">
    <div class="container-fluid">
	    <div class="card shadow mb-4">
            <h3 class="text-primary fs-5" style="color: #3487C9 !important; margin-left: 25px; margin-top: 16px;">FORMATO DE INGRESO</h3>
		<div class="card-body">
			<div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="hidden" class="form-control" id="id_formato" name="id_formato">
                            <label for="fecha_ingreso" class="form-label w-50 fs-6">Fecha de Ingreso</label>
                            <input type="date" class="form-control w-50 m-2" id="fecha_ingreso" name="fecha_ingreso" value="<?= $fecha_actual?>">
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="documento_serie" class="form-label w-50 fs-6">Documento</label>
                            <input type="text" class="form-control w-50 m-2" id="documento_serie" name="documento_serie" placeholder="N° de serie">
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="id_cliente" class="form-label w-50 fs-6">Proveedor</label>
                            <select class="form-control w-50 m-2" id="id_cliente" name="id_cliente">
                                <option value="">Escoger</option>
								<?php
								foreach ($proveedor as $p){
									?>
                                    <option value="<?= $p->id_cliente;?>"><?= $p->cliente_nombre;?></option>
									<?php
								}
								?>
                            </select>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <label for="agg_producto" class="form-label ml-2">Agregar Producto</label>
                    </div>
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" class="form-control m-2" id="agg_producto" name="agg_producto" placeholder="Ingrese información...">
                        </div>
                        <div id="lista_productos">

                        </div>
<!--                        <div class="spinner-border text-success" role="status"></div>-->
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="text-capitalize">
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Marca</th>
                                <th>Subcategoría</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody id="llenado_tabla">
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-success" id="btn-agregar-formato_ingreso" name="btn-agregar-formato_ingreso"><i class="fa fa-save"></i> Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script>
    let medida = <?= $medida ?>;
    let marca = <?= $marca ?>;
    let subcategoria = <?= $subcategoria ?>;

    let agg_producto = document.getElementById('agg_producto');
    if(agg_producto && agg_producto.addEventListener){
        agg_producto.addEventListener('keyup',function (){
            buscar_productos()
        });
    }
</script>
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<script src="<?php echo _SERVER_ . _JS_;?>formato_ingreso.js"></script>