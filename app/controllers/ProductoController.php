<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 19:54
 */
require 'app/models/Menu.php';
require 'app/models/Rol.php';
require 'app/models/Producto.php';
require 'app/models/Archivo.php';
require 'app/models/Builder.php';
class ProductoController{
    private $menu;
    private $rol;
    private $producto;
    private $archivo;
    private $builder;
    private $sesion;
    private $encriptar;
    private $log;
    private $validar;
    public function __construct()
    {
        $this->menu = new Menu();
        $this->rol = new Rol();
        $this->archivo = new Archivo();
        $this->producto = new Producto();
        $this->builder = new Builder();
        $this->encriptar = new Encriptar();
        $this->log = new Log();
        $this->sesion = new Sesion();
        $this->validar = new Validar();
    }
    public function inicio(){
        try{
            //Llamamos a la clase del Navbar, que sólo se usa
            // en funciones para llamar vistas y la instaciamos
            $this->nav = new Navbar();
			$id_subcategoria = $_GET["id"];
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
            $productos = $this->producto->listar_productos($id_subcategoria);
            $categorias = $this->producto->listar_categorias();
			$nombresub = $this->producto->listarxnombre($id_subcategoria);
			$nombrecat = $this->producto->listar_cat_sub($id_subcategoria);
			$nombrefam = $this->producto->listar_fam_cat($id_subcategoria);
			$todoproductos = $this->producto->listartodoproductos();
			$marca= $this->producto->listar_marca_cat($id_subcategoria);
			//Hacemos el require de los archivos a usar en las vistas
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'producto/inicio.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            //En caso de errores insertamos el error generado y redireccionamos a la vista de inicio
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
    public function formato_ingreso(){
        try{
            $this->nav = new Navbar();
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
			$proveedor = $this->producto->proveedor();
			$fecha_actual = date("Y-m-d");
			$me = $this->producto->traermedidas();
			$medida = json_encode($me);
			$ma = $this->producto->traermarca();
			$marca = json_encode($ma);
			$sc = $this->producto->traersubcategoria();
			$subcategoria = json_encode($sc);
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'producto/formato_ingreso.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            //En caso de errores insertamos el error generado y redireccionamos a la vista de inicio
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
    public function imagenes(){
        try{
            //Llamamos a la clase del Navbar, que sólo se usa
            // en funciones para llamar vistas y la instaciamos
            $this->nav = new Navbar();
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
			$imagenes = $this->producto->mostrar_imagen($_GET['id']);
			$nombre = $this->producto->traernombre($_GET['id'])->producto_nombre;
            //Traemos los menus registrados
			//Hacemos el require de los archivos a usar en las vistas
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'producto/imagenes.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            //En caso de errores insertamos el error generado y redireccionamos a la vista de inicio
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
    public function listar(){
        try{
            //Llamamos a la clase del Navbar, que sólo se usa
            // en funciones para llamar vistas y la instaciamos
            $this->nav = new Navbar();
			$id_subcategoria = $_GET["id"];
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
			$todoproductos = $this->producto->listartodoproductos();
			$marca= $this->producto->traermarca();
			$subcategoria = $this->producto->traersubcategoria();
			//Hacemos el require de los archivos a usar en las vistas
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'producto/listar.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            //En caso de errores insertamos el error generado y redireccionamos a la vista de inicio
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
    public function guardar_producto_inicio(){
        $result = 2;
        $message = 'OK';
        try{
            $ok_data = true;
			$id_usuario = $this->encriptar->desencriptar($_SESSION['c_u'],_FULL_KEY_);
            $ok_data = $this->validar->validar_parametro('producto_nombre', 'POST',true,$ok_data,100,'texto',0);
            $ok_data = $this->validar->validar_parametro('producto_marca', 'POST',true,$ok_data,100,'numero',0);
			$ok_data = $this->validar->validar_parametro('producto_caracteristicas', 'POST',true,$ok_data,100,'texto',0);
			$ok_data = $this->validar->validar_parametro('producto_estado', 'POST',true,$ok_data,1,'numero',0);
            if($ok_data){
				$id = $_POST['id_producto'];
                if($id == null){
					if($_FILES['producto_imagen']['name'] != null){
						$validar_duplicados_codigo = $this->producto->validar_codigo($_POST['codigo_barra_producto']);
						if($validar_duplicados_codigo){
							$result = 4;
							$message = "Ya existe un producto con esa serie";
						}else{
							$validar_duplicados_nombre = $this->producto->buscar_productos($_POST['producto_nombre']);
							if($validar_duplicados_nombre){
								$result = 3;
								$message = "Ya existe un producto con ese nombre";
							}else{
								if($_FILES['producto_imagen']['name'] != null) {
									$ext = pathinfo($_FILES['producto_imagen']['name'], PATHINFO_EXTENSION);
									$file_path = "media/productos/" . "producto" . '_' .date('dmYHis') . "." . $ext;
									if($this->archivo->subir_imagen_comprimida($_FILES['producto_imagen']['tmp_name'], $file_path,false)){
										$producto_imagen = $file_path;
									} else {
										$producto_imagen = 'media/productos/producto-sin-imagen.png';
									}
								}else{
									$producto_imagen = 'media/productos/producto-sin-imagen.png';
								}
								$traer_serie_correlativo = $this->producto->listar_serieycorre($_POST["id_subcategoria"]);
								if($traer_serie_correlativo->familia_correlativo==0){
									$total = 1;
								}else{
									$sumar = $traer_serie_correlativo->familia_correlativo + 1;
									$total = $sumar;
								}
								$updatefamilycorrelativo = $this->producto->updatecorrelativo($total, $traer_serie_correlativo->id_familia);
								if($updatefamilycorrelativo == 1){
									$concat = $this->producto->listar_serieycorre($_POST["id_subcategoria"]);
									$correlativo = $concat->familia_correlativo;
								}
								$idcat=$this->producto->traeridcat($_POST["id_subcategoria"])->id_categoria;
								$result=$this->builder->save("productos", array(
									'id_categoria' => $idcat,
									'id_subcategoria' => $_POST["id_subcategoria"],
									'producto_nombre' => $_POST['producto_nombre'],
									'producto_precio' => $_POST['producto_precio'],
									'producto_creador' => $this->encriptar->desencriptar($_SESSION['c_u'],_FULL_KEY_),
									'producto_stock' => $_POST['producto_stock'],
									'producto_descuento' => ($_POST['producto_descuento']== null)?"0":$_POST['producto_descuento'],
									'producto_precioantiguo' => ($_POST['producto_precioantiguo']== null)?"0":$_POST['producto_precioantiguo'],
									'producto_marca' => $_POST['producto_marca'],
									'producto_reseña' => $_POST['producto_reseña'],
									'producto_caracteristicas' => $_POST['producto_caracteristicas'],
									'producto_detalle' => $_POST['producto_detalle'],
									'producto_valoracion' => ($_POST['producto_valoracion']== null)?"0.0":$_POST['producto_valoracion'],
									'producto_imagen' => $producto_imagen,
									'producto_estado' => $_POST['producto_estado'],
									'producto_creacion' => date("Y-m-d H:i:s"),
									'codigo_barra_producto' => $_POST['codigo_barra_producto'],
									'codigo_barra_sistema' => $correlativo,
								));
							}
						}
					}else{
						$result = 5;
						$message = "Debe ingresar una imagen del producto";
					}
				}else{
                    $validar_codigo = $this->producto->validar_codigo($_POST['codigo_barra_producto']);
                    $validar_codigo_id = $this->producto->validar_codigo_id($_POST['codigo_barra_producto'],$_POST['id_producto']);
                    if( $validar_codigo->id_producto != $validar_codigo_id->id_producto ){
                        $result = 4;
                        $message = "Ya existe un producto con esa serie";
                    }else{
                        $validar_nombre = $this->producto->buscar_productos($_POST['producto_nombre']);
						$validar_nombre_id = $this->producto->validar_nombre_id($_POST['producto_nombre'],$_POST['id_producto']);
                        if($validar_nombre->producto_nombre != $validar_nombre_id->producto_nombre){
                            $result = 3;
                            $message = "Ya existe un producto con ese nombre";
                        }else{
                            $id_producto = $_POST['id_producto'];
                            if($_FILES['producto_imagen']['name'] != null) {
                                $ext = pathinfo($_FILES['producto_imagen']['name'], PATHINFO_EXTENSION);
                                $file_path = "media/productos/" . "producto" . '_' .date('dmYHis') . "." . $ext;
                                if($this->archivo->subir_imagen_comprimida($_FILES['producto_imagen']['tmp_name'], $file_path,false)){
                                    $producto_imagen = $file_path;
                                }else{
                                    $producto_imagen = 'media/productos/producto-sin-imagen.png';
                                }
                            }else{
                                $producto_imagen = $this->producto->listarxid($id_producto)->producto_imagen;
                            }
                            $idcat=$this->producto->traeridcat($_POST["id_subcategoria"])->id_categoria;
                            $result=$this->builder->update("productos", array(
                                'id_categoria' => $idcat,
                                'id_subcategoria' => $_POST["id_subcategoria"],
                                'producto_nombre' => $_POST['producto_nombre'],
                                'producto_precio' => $_POST['producto_precio'],
                                'producto_stock' => $_POST['producto_stock'],
                                'producto_descuento' => $_POST['producto_descuento'],
                                'producto_precioantiguo' => $_POST['producto_precioantiguo'],
                                'producto_marca' => $_POST['producto_marca'],
                                'producto_reseña' => $_POST['producto_reseña'],
                                'producto_caracteristicas' => $_POST['producto_caracteristicas'],
                                'producto_detalle' => $_POST['producto_detalle'],
                                'producto_valoracion' => ($_POST['producto_valoracion']== null)?"0.0":$_POST['producto_valoracion'],
                                'producto_imagen' => $producto_imagen,
                                'producto_estado' => $_POST['producto_estado'],
                                'producto_creacion' => date("Y-m-d H:i:s"),
                                'codigo_barra_producto' => $_POST['codigo_barra_producto']
                            ), array('id_producto' => $_POST['id_producto']));
                        }
                    }
				}
            } else {
                $result = 6;
                $message = "Integridad de datos fallida. Algún parametro se está enviando mal";
            }
        } catch (Exception $e){
            //Registramos el error generado y devolvemos el mensaje enviado por PHP
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            $message = $e->getMessage();
        }
        //Retornamos el json
        echo json_encode(array("result" => array("code" => $result, "message" => $message)));
    }
    public function guardar_producto_listar(){
        $result = 2;
        $message = 'OK';
        try{
            $ok_data = true;
			$id_usuario = $this->encriptar->desencriptar($_SESSION['c_u'],_FULL_KEY_);
            $ok_data = $this->validar->validar_parametro('producto_nombre', 'POST',true,$ok_data,100,'texto',0);
            $ok_data = $this->validar->validar_parametro('producto_marca', 'POST',true,$ok_data,100,'numero',0);
			$ok_data = $this->validar->validar_parametro('producto_caracteristicas', 'POST',true,$ok_data,100,'texto',0);
			$ok_data = $this->validar->validar_parametro('producto_estado', 'POST',true,$ok_data,1,'numero',0);
			$ok_data = $this->validar->validar_parametro('producto_stock', 'POST',true,$ok_data,100,'numero',0);
            if($ok_data){
				$id = $_POST['id_producto'];
				if($id == null){
					if($_FILES['producto_imagen']['name'] != null){
						$validar_duplicados_codigo = $this->producto->validar_codigo($_POST['codigo_barra_producto']);
						if($validar_duplicados_codigo){
							$result = 4;
							$message = "Ya existe un producto con esa serie";
						}else{
							$validar_duplicados_nombre = $this->producto->buscar_productos($_POST['producto_nombre']);
							if($validar_duplicados_nombre){
								$result = 3;
								$message = "Ya existe un producto con ese nombre";
							}else{
								if($_FILES['producto_imagen']['name'] != null) {
									$ext = pathinfo($_FILES['producto_imagen']['name'], PATHINFO_EXTENSION);
									$file_path = "media/productos/" . "producto" . '_' .date('dmYHis') . "." . $ext;
									if($this->archivo->subir_imagen_comprimida($_FILES['producto_imagen']['tmp_name'], $file_path,false)){
										$producto_imagen = $file_path;
									} else {
										$producto_imagen = 'media/productos/producto-sin-imagen.png';
									}
								}else{
									$producto_imagen = 'media/productos/producto-sin-imagen.png';
								}
								$idcat=$this->producto->traeridcat($_POST["id_subcategoria"])->id_categoria;
								$traer_serie_correlativo = $this->producto->listar_serieycorre($_POST["id_subcategoria"]);
								if($traer_serie_correlativo->familia_correlativo==0){
									$total = 1;
								}else{
									$sumar = $traer_serie_correlativo->familia_correlativo + 1;
									$total = $sumar;
								}
								$updatefamilycorrelativo = $this->producto->updatecorrelativo($total, $traer_serie_correlativo->id_familia);
								if ($updatefamilycorrelativo == 1){
									$concat = $this->producto->listar_serieycorre($_POST["id_subcategoria"]);
									$serie = $concat->familia_serie.$concat->familia_correlativo;
								}
								$result=$this->builder->save("productos", array(
									'id_categoria' => $idcat,
									'id_subcategoria' => $_POST["id_subcategoria"],
									'producto_nombre' => $_POST['producto_nombre'],
									'producto_precio' => $_POST['producto_precio'],
									'producto_creador' => $this->encriptar->desencriptar($_SESSION['c_u'],_FULL_KEY_),
									'producto_stock' => $_POST['producto_stock'],
									'producto_descuento' => ($_POST['producto_descuento']== null)?"0":$_POST['producto_descuento'],
									'producto_precioantiguo' => ($_POST['producto_precioantiguo']== null)?"0":$_POST['producto_precioantiguo'],
									'producto_marca' => $_POST['producto_marca'],
									'producto_reseña' => $_POST['producto_reseña'],
									'producto_caracteristicas' => $_POST['producto_caracteristicas'],
									'producto_detalle' => $_POST['producto_detalle'],
									'producto_valoracion' => ($_POST['producto_valoracion']== null)?"0.0":$_POST['producto_valoracion'],
									'producto_imagen' => $producto_imagen,
									'producto_estado' => $_POST['producto_estado'],
									'producto_creacion' => date("Y-m-d H:i:s"),
									'codigo_barra_producto' => $_POST['codigo_barra_producto'],
									'codigo_barra_sistema' => $serie,
								));
							}
						}
					}else{
						$result = 5;
						$message = "Debe ingresar una imagen del producto";
					}
				}else{
					$validar_codigo = $this->producto->validar_codigo($_POST['codigo_barra_producto']);
					$validar_codigo_id = $this->producto->validar_codigo_id($_POST['codigo_barra_producto'],$_POST['id_producto']);
					if( $validar_codigo->id_producto != $validar_codigo_id->id_producto ){
						$result = 4;
						$message = "Ya existe un producto con esa serie";
					}else{
						$validar_nombre = $this->producto->buscar_productos($_POST['producto_nombre']);
						$validar_nombre_id = $this->producto->validar_nombre_id($_POST['producto_nombre'],$_POST['id_producto']);
						if($validar_nombre->producto_nombre != $validar_nombre_id->producto_nombre){
							$result = 3;
							$message = "Ya existe un producto con ese nombre";
						}else{
							$id_producto = $_POST['id_producto'];
							if($_FILES['producto_imagen']['name'] != null) {
								$ext = pathinfo($_FILES['producto_imagen']['name'], PATHINFO_EXTENSION);
								$file_path = "media/productos/" . "producto" . '_' .date('dmYHis') . "." . $ext;
								if($this->archivo->subir_imagen_comprimida($_FILES['producto_imagen']['tmp_name'], $file_path,false)){
									$producto_imagen = $file_path;
								} else {
									$producto_imagen = 'media/productos/producto-sin-imagen.png';
								}
							} else {
								$producto_imagen = $this->producto->listarxid($id_producto)->producto_imagen;
							}
							$idcat=$this->producto->traeridcat($_POST["id_subcategoria"])->id_categoria;
							$result=$this->builder->update("productos", array(
								'id_categoria' => $idcat,
								'id_subcategoria' => $_POST["id_subcategoria"],
								'producto_nombre' => $_POST['producto_nombre'],
								'producto_precio' => $_POST['producto_precio'],
								'producto_stock' => $_POST['producto_stock'],
								'producto_descuento' => $_POST['producto_descuento'],
								'producto_precioantiguo' => $_POST['producto_precioantiguo'],
								'producto_marca' => $_POST['producto_marca'],
								'producto_reseña' => $_POST['producto_reseña'],
								'producto_caracteristicas' => $_POST['producto_caracteristicas'],
								'producto_detalle' => $_POST['producto_detalle'],
								'producto_valoracion' => ($_POST['producto_valoracion']== null)?"0.0":$_POST['producto_valoracion'],
								'producto_imagen' => $producto_imagen,
								'producto_estado' => $_POST['producto_estado'],
								'producto_creacion' => date("Y-m-d H:i:s"),
								'codigo_barra_producto' => $_POST['codigo_barra_producto']
							), array('id_producto' => $_POST['id_producto']));
						}
					}
				}
            } else {
                //Código 6: Integridad de datos erronea
                $result = 6;
                $message = "Integridad de datos fallida. Algún parametro se está enviando mal";
            }
        } catch (Exception $e){
            //Registramos el error generado y devolvemos el mensaje enviado por PHP
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            $message = $e->getMessage();
        }
        //Retornamos el json
        echo json_encode(array("result" => array("code" => $result, "message" => $message)));
    }
    public function editar(){
        $ok_data = true;
        //Código de error general
        $result = 2;
        //Mensaje a devolver en caso de hacer consulta por app
        $message = 'OK';
        try{
            //Validacion de datos
            if($ok_data){
                //Creamos el modelo e ingresamos los datos a guardar
                $dato = $_POST['guardarid'];
                $result = $this->producto->listarxid($dato);
                //Validamos la duplicidad del $_POST['menu_controlador'], para evitar duplicados
            } else {
                //Código 6: Integridad de datos erronea
                $result = 6;
                $message = "Integridad de datos fallida. Algún parametro se está enviando mal";
            }
        } catch (Exception $e){
            //Registramos el error generado y devolvemos el mensaje enviado por PHP
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            $message = $e->getMessage();
        }
        //Retornamos el json
        echo json_encode(array("result" => array("code" => $result, "message" => $message)));
    }
    public function guardar_productoimg(){
        try{
            if($_FILES['imagen']['name'] != null) {
                //Conseguimos la extension del archivo y especificamos la ruta
                $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
                $file_path = "media/imgproductos/" . "producto" . '_' .date('dmYHis') . "." . $ext;
                //Para subir archivos en general o imagenes sin comprimir
                //if(move_uploaded_file($_FILES['usuario_imagenp']['tmp_name'], $file_path)){
                //Para subir imagenes comprimidas
                if($this->archivo->subir_imagen_comprimida($_FILES['imagen']['tmp_name'], $file_path,false)){
                    $imgproducto = $file_path;
                } else {
                    $imgproducto = 'media/productos/producto-sin-imagen.png';
                }
            } else {
                $imgproducto = 'media/productos/producto-sin-imagen.png';
            }
            $id_producto = $_POST['id_producto'];
            $result=$this->builder->save("imagenes_productos", array(
                'id_producto' => $id_producto,
                'imagen' => $imgproducto));

        }catch (Exception $e){
            //Registramos el error generado y devolvemos el mensaje enviado por PHP
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            $message = $e->getMessage();
        }
        //Retornamos el json
        echo json_encode(array("result" => array("code" => $result, "message" => $message)));
    }
    public function guardar_formato_ingreso(){
        try{
			$ok_data = true;
			$contenido = json_decode($_POST['array_productos']);
			if($ok_data){
				$validar_serie = $this->producto->validar_serie_formato($_POST['documento_serie']);
				if($validar_serie){
					$result = 3;
				}else{
					$usuario_logueado = $this->encriptar->desencriptar($_SESSION['c_u'], _FULL_KEY_);
					$result = $this->builder->save("formato_ingreso", array(
						'id_cliente' => $_POST['id_cliente'],
						'formato_fecha' => $_POST['fecha_ingreso'],
						'formato_documento_serie' => $_POST['documento_serie'],
						'formato_usuario_creador' => $usuario_logueado,
						'formato_fecha_creacion' => date('Y-m-d H:i:s'),
					));
					$id_formato = $this->producto->ultimo_id_fi()->id_formato;
                    /* If de contenido  */
					foreach ($contenido as $c){

						$result = $this->builder->save("detalle_formato_ingreso", array(
							'id_formato' => $id_formato,
							'id_producto' => $c->id,
							'cantidad' => $c->cantidad,
							'estado' => 1,
							'fecha_creacion' => date('Y-m-d'),
						));
                        if ($result==1){

                            $result2 = $this->builder->update('productos',array(
                                'producto_stock ' =>'producto_stock +'.$c->cantidad
                            ),
                            array('id_producto'=>$c->id_producto));
                        }
					}
                    //Intento de actualizar stock
//					$datos_detalleformato = $this->producto->obtenerDetalleProductos();
//					foreach ($datos_detalleformato as $d) {
//						$productoId = $d['producto_id'];
//						$cantidadIngresada = $d['cantidad'];
//						// Obtener el stock actual del producto
//						$stockActual = $this->producto->obtenerStockProducto($productoId);
//						// Calcular el nuevo stock
//						$nuevoStock = $stockActual + $cantidadIngresada;
//						// Actualizar el stock del producto
//						$result = $this->producto->actualizarStockProducto($productoId, $nuevoStock);
//					}
				}
			}
		}catch (Exception $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			$message = $e->getMessage();
        }
        echo json_encode(array("result" => array("code" => $result, "message" => $message)));
    }

	public function listar_productos_input(){
		try{
			$valor =  $_POST['valor'];
			$result = $this->producto->listar_productos_input($valor);
		}catch (Exception $e){
			//Registramos el error generado y devolvemos el mensaje enviado por PHP
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			$message = $e->getMessage();
		}
//		echo json_encode(array("result" => array("code" => $result, "message" => $message)));
		echo json_encode($result);

	}
	public function traermarca(){
		try{
			$valor =  $_POST['id_subcategoria'];
			$result = $this->producto->listar_marca_cat($valor);
		}catch (Exception $e){
			//Registramos el error generado y devolvemos el mensaje enviado por PHP
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			$message = $e->getMessage();
		}
//		echo json_encode(array("result" => array("code" => $result, "message" => $message)));
		echo json_encode($result);

	}
}

