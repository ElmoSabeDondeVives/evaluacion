<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:01
 */
class Producto{
    private $pdo;
    private $log;

    public function __construct(){
        $this->pdo = Database::getConnection();
        $this->log = new Log();
    }
    public function listar_productos($id_subcategoria){
        try{
            $sql = 'select * from productos p inner join categorias c on p.id_categoria = c.id_categoria inner join familias f on c.id_familia = f.id_familia inner join usuarios u on p.producto_creador = u.id_usuario inner join marca m on p.producto_marca = m.id_marca where id_subcategoria = ?';
//            $sql = 'select * from productos p inner join categorias c on p.id_categoria = c.id_categoria inner join usuarios u on p.producto_creador = u.id_usuario where id_subcategoria = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id_subcategoria]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
	public function listar_categorias(){
		try{
			$sql = 'select * from categorias';
			$stm = $this->pdo->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
    public function buscar_productos($nombre){
        try{
            $sql = 'select * from productos where producto_nombre = ? limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$nombre]);
            return $stm->fetch();
        }catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function validar_codigo($codigo){
        try{
            $sql = 'select * from productos where codigo_barra_producto = ? limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$codigo]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function validar_serie_formato($serie){
        try{
            $sql = 'select * from formato_ingreso where formato_documento_serie = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$serie]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function validar_correlativo_formato($correlativo){
        try{
            $sql = 'select * from formato_ingreso where formato_documento_correlativo = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$correlativo]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function ultimo_id_fi(){
        try{
            $sql = 'select * from formato_ingreso order by id_formato desc';
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function obtenerDetalleProductos(){
        try{
            $sql = 'select * from detalle_formato_ingreso';
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function obtenerStockProducto($id){
        try{
            $sql = 'select producto_stock from productos where id_producto = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
	public function validar_codigo_id($codigo , $id){
		try{
			$sql = 'select * from productos where codigo_barra_producto = ? and id_producto = ? limit 1';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$codigo,$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function validar_nombre_id($nombre , $id){
		try{
			$sql = 'select * from productos where producto_nombre = ? and id_producto = ? limit 1';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$nombre,$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
    public function agregar_relacion($id_rol, $id_menu){
        try{
            $sql = 'insert into roles_menus (id_rol, id_menu) values (?,?)';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id_rol, $id_menu]);
            return 1;
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return 2;
        }
    }
    public function eliminar_relacion($id_rol, $id_menu){
        try{
            $sql = 'delete from roles_menus where id_rol = ? and id_menu = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id_rol, $id_menu]);
            return 1;
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return 2;
        }
    }
	public function traeridcat($id_subcategoria){
		try{
            $sql ='select * from sub_categoria where id_subcategoria =? limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id_subcategoria]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
	}
	public function serie_correlativo($id){
		try{
            $sql ='select * from sub_categoria where id_subcategoria =? limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
	}
	public function verifimg($id){
		try{
            $sql ='select producto_imagen from productos where id_producto = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
	}
	public function guardar_actualizar($model){
		try{
			if(isset($model->id_producto)){
				$sql = 'update productos set
                         id_subcategoria= ?,
                         producto_nombre= ?,
                         producto_precio= ?,
                         producto_stock= ?,
                         producto_imagen= ?,
                         producto_creacion= ?,
                         producto_creador = ?,
                         producto_estado= ?
                        where id_producto  = ?';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([
					$model->id_subcategoria,
					$model->producto_nombre,
					$model->producto_precio,
					$model->producto_stock,
					$model->producto_imagen,
					$model->producto_creacion,
					$model->producto_creador,
					$model->producto_estado,
					$model->id_producto,
				]);
			} else {
				$sql = 'insert into productos (id_categoria, id_subcategoria, producto_nombre, producto_precio, producto_stock, producto_imagen, producto_creador, producto_estado, producto_creacion) values (?,?,?,?,?,?,?,?,?)';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([
					$model->id_categoria,
					$model->id_subcategoria,
					$model->producto_nombre,
					$model->producto_precio,
					$model->producto_stock,
					$model->producto_imagen,
					$model->producto_creador,
					$model->producto_estado,
					$model->producto_creacion
				]);
			}
			return 1;
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return 2;
		}
	}
	public function actualizarStockProducto($stock, $id){
		try{
			$sql = 'update productos set producto_stock = ? where id_producto = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$stock, $id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function listarxid($dato){
		try{
			$sql = 'select * from productos where id_producto = ?' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$dato]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function traerruta($id){
		try{
			$sql = 'select imagen from imagenes_productos where id_imgproductos = ? limit 1' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function mostrar_imagen($id){
		try{
			$sql = 'select imagen, id_imgproductos from imagenes_productos where id_producto = ?' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id]);
			return $stm->fetchAll();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function traernombre($id){
		try{
			$sql = 'select producto_nombre from productos where id_producto = ? limit 1' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function listarxnombre($id_subcategoria){
		try{
			$sql = 'select subcategoria_nombre from sub_categoria where id_subcategoria = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id_subcategoria]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function listar_cat_sub($id){
		try{
			$sql = 'select categoria_nombre from categorias 
    				inner join sub_categoria sc on categorias.id_categoria = sc.id_categoria
    				where sc.id_subcategoria = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function listar_fam_cat($id){
		try{
			$sql = 'select familia_nombre from familias f
					inner join categorias c on f.id_familia = c.id_familia
					inner join sub_categoria sc on c.id_categoria = sc.id_categoria
					where id_subcategoria = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function listartodoproductos(){
		try{
			$sql = 'select * from productos inner join usuarios u on productos.producto_creador = u.id_usuario inner join marca m on productos.producto_marca = m.id_marca';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([]);
			return $stm->fetchAll();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function traermarca(){
		try{
			$sql = 'select * from marca';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([]);
			return $stm->fetchAll();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function traermedidas(){
		try{
			$sql = 'select * from medida';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([]);
			return $stm->fetchAll();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function updatecorrelativo( $total , $id_familia){
		try{
			$sql = 'update familias set familia_correlativo = ? where id_familia = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$total , $id_familia]);
			return 1;
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function listar_serieycorre($id){
		try{
			$sql = 'select * from familias f 
					inner join categorias c on f.id_familia = c.id_familia
					inner join sub_categoria sc on c.id_categoria = sc.id_categoria
					where id_subcategoria = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
    public function traersubcategoria(){
        try{
            $sql = 'select * from sub_categoria';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'._FUNCTION_);
            return [];
        }
    }
    public function proveedor(){
        try{
            $sql = 'select * from clientes';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'._FUNCTION_);
            return [];
        }
    }
	public function listar_productos_input($valor){
		try {
			$sql = 'SELECT * FROM productos 
    				inner join marca m on productos.producto_marca = m.id_marca 
         			inner join sub_categoria sc on productos.id_subcategoria = sc.id_subcategoria
         			WHERE producto_nombre LIKE ?';
			$stm = $this->pdo->prepare($sql);
			$valor = '%' . $valor . '%'; // Agregar los caracteres '%' antes y después del valor
			$stm->execute([$valor]);
			return $stm->fetchAll();
		} catch (Throwable $e) {
			$this->log->insertar($e->getMessage(), get_class($this).'|'._FUNCTION_);
			return [];
		}
	}
	public function listar_marca_cat($valor){
		try {
			$sql = 'SELECT * from sub_categoria sc 
					inner join categorias c on sc.id_categoria = c.id_categoria
					inner join marca_categoria mc on c.id_categoria = mc.id_categoria
					inner join marca m on mc.id_marca = m.id_marca
					where id_subcategoria = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$valor]);
			return $stm->fetchAll();
		} catch (Throwable $e) {
			$this->log->insertar($e->getMessage(), get_class($this).'|'._FUNCTION_);
			return [];
		}
	}
}
