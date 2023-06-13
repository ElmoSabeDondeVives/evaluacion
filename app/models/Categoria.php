<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:01
 */
class Categoria{
    private $pdo;
    private $log;
    public function __construct(){
        $this->pdo = Database::getConnection();
        $this->log = new Log();
    }
    //Listamos todos los menus creados en el sistema
    public function listar_categorias($id_familia){
        try{
            $sql = 'select * from categorias inner join familias f on categorias.id_familia = f.id_familia where f.id_familia = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id_familia]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
	public function listarxnombre($id_familia){
		try{
			$sql = 'select familia_nombre from familias where id_familia = ?';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$id_familia]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
    //Listamos los datos del menú según el id enviado
    public function buscar_categoria($nombre){
        try{
            $sql = 'select * from categorias where categoria_nombre = ? limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$nombre]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
	public function buscar_categoria_id($nombre, $id){
		try{
			$sql = 'select * from categorias where categoria_nombre = ? and id_categoria = ? limit 1';
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
    public function guardar_categoria($model){
        try{
            if(isset($model->id_categoria)){
                $sql = 'update categorias set id_familia = ?, categoria_nombre = ?,categoria_estado = ? where id_categoria = ?';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([ $model->id_familia,$model->categoria_nombre, $model->categoria_estado, $model->id_categoria ]);
            } else {
                $sql = 'insert into categorias (id_familia, categoria_nombre, categoria_estado) values (?,?,?)';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([$model->id_familia, $model->categoria_nombre, $model->categoria_estado]);
            }
            return 1;
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return 2;
        }
    }

	public function listarxid($dato){
		try{
			$sql = 'select * from categorias where id_categoria = ?' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$dato]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}

	public function guardar_actualizar($model){
		try{
			if(isset($model->id_categoria)){
				$sql = 'update categorias set
                         categoria_nombre = ?,
                         categoria_estado = ?
                        where id_categoria  = ?';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([
					$model->categoria_nombre,
					$model->categoria_estado,
					$model->id_categoria,
				]);
			} else {
				$sql = 'insert into categorias (id_familia, categoria_nombre, categoria_estado) values (?, ?, ?)';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([

					$model->id_familia,
					$model->categoria_nombre,
					$model->categoria_estado,
				]);
			}
			return 1;
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return 2;
		}
	}
}
