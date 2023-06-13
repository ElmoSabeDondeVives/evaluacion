<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:01
 */
class Subcategoria{
    private $pdo;
    private $log;
    public function __construct(){
        $this->pdo = Database::getConnection();
        $this->log = new Log();
    }
    //Listamos todos los menus creados en el sistema
    public function listar_subcategorias($id_familia){
        try{
            $sql = 'select * from sub_categoria inner join categorias c on sub_categoria.id_categoria = c.id_categoria where c.id_categoria = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id_familia]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
	public function listarxnombre($id_categoria){
		try{
			$sql = 'select categoria_nombre from categorias where id_categoria = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id_categoria]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
    //Listamos los datos del menú según el id enviado
    public function buscar_subcategoria($nombre){
        try{
            $sql = 'select * from sub_categoria where subcategoria_nombre = ? limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$nombre]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
	public function buscar_subcategoria_id($nombre, $id){
		try{
			$sql = 'select * from sub_categoria where subcategoria_nombre = ? and id_subcategoria = ? limit 1';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$nombre, $id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
    //Agrega la relacion entre el rol y el menu
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
    //Eliminar la relacion entre el rol y el menu
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
    //Funcion para guardar los menus creados o editarlos
    public function guardar_subcategoria($model){
        try{
            if(isset($model->id_subcategoria)){
                $sql = 'update sub_categoria set id_categoria = ?, subcategoria_nombre = ?, subcategoria_estado = ? where id_subcategoria = ?';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([  $model->id_categoria, $model->subcategoria_nombre, $model->subcategoria_estado, $model->id_subcategoria ]);
            } else {
                $sql = 'insert into sub_categoria (id_categoria, subcategoria_nombre, subcategoria_estado) values (?,?,?)';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([$model->id_categoria, $model->categoria_nombre, $model->categoria_estado]);
            }
            return 1;
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return 2;
        }
    }

	public function guardar_actualizar($model){
		try{
			if(isset($model->id_subcategoria)){
				$sql = 'update sub_categoria set
                         subcategoria_nombre = ?,
                         subcategoria_estado = ?
                        where id_subcategoria  = ?';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([
					$model->subcategoria_nombre,
					$model->subcategoria_estado,
					$model->id_subcategoria,
				]);
			} else {
				$sql = 'insert into sub_categoria (id_categoria, subcategoria_nombre, subcategoria_estado) values (?, ?, ?)';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([

					$model->id_categoria,
					$model->subcategoria_nombre,
					$model->subcategoria_estado,
				]);
			}
			return 1;
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return 2;
		}
	}

	public function listarxid($dato){
		try{
			$sql = 'select * from sub_categoria where id_subcategoria = ?' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$dato]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}

}
