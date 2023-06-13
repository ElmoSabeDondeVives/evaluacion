<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:01
 */
class Familias{
    private $pdo;
    private $log;
    public function __construct(){
        $this->pdo = Database::getConnection();
        $this->log = new Log();
    }
    //Listamos todos los menus creados en el sistema
    public function listar_familias(){
        try{
            $sql = 'select * from familias';
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }

    //Listamos los datos del menú según el id enviado
    public function validar_nombre($nombre){
        try{
            $sql = 'select * from familias where familia_nombre = ? and familia_estado = 1 limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$nombre]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
	public function validar_nombre_id($nombre , $id){
		try{
			$sql = 'select * from familias where familia_nombre = ? and id_familia = ? and familia_estado = 1 limit 1';
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$nombre,$id]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
    public function buscar_familiaxserie($serie){
        try{
            $sql = 'select * from familias where familia_serie = ? and familia_estado = 1 limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$serie]);
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
    public function guardar_familia($model){
        try{
            if(isset($model->id_familia)){
                $sql = 'update familias set familia_nombre = ?,familia_descripcion = ?, familia_estado = ? where id_familia = ?';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([ $model->familia_nombre, $model->familia_descripcion, $model->familia_estado ]);
            } else {
                $sql = 'insert into familias (familia_nombre, familia_descripcion, familia_estado) values (?,?,?)';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([$model->familia_nombre, $model->familia_descripcion, $model->familia_estado]);
            }
            return 1;
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return 2;
        }
    }

	public function guardar_actualizar($model){
		try{
			if(isset($model->id_familia)){
				$sql = 'update familias set
                         familia_nombre = ?,
                         familia_descripcion = ?,
                         familia_estado = ?
                        where id_familia  = ?';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([
					$model->familia_nombre,
					$model->familia_descripcion,
					$model->familia_estado,
					$model->id_familia
				]);
			} else {
				$sql = 'insert into familias (familia_nombre, familia_descripcion, familia_estado) values (?,?,?)';
				$stm = $this->pdo->prepare($sql);
				$stm->execute([
					$model->familia_nombre,
					$model->familia_descripcion,
					$model->familia_estado,
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
			$sql = 'select * from familias where id_familia = ?' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$dato]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
	public function familias(){
		try{
			$sql = 'select * from familias' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
}
