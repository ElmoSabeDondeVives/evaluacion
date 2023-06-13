<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:01
 */
class Cliente{
    private $pdo;
    private $log;
    public function __construct(){
        $this->pdo = Database::getConnection();
        $this->log = new Log();
    }
    //Listamos todos los menus creados en el sistema
    public function listar_clientes(){
        try{
            $sql = 'select * from clientes';
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    //Listamos los datos del menú según el id enviado
    public function buscar_clientes($numero){
        try{
            $sql = 'select * from clientes where cliente_numero = ? limit 1';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$numero]);
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
    public function guardar_cliente($model){
        try{
            if(isset($model->id_cliente)){
                $sql = 'update clientes set cliente_nombre = ?,cliente_estado = ?, cliente_numero = ? where id_cliente = ?';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([ $model->cliente_nombre, $model->cliente_estado, $model->cliente_numero, $model->id_cliente ]);
            } else {
                $sql = 'insert into clientes (cliente_nombre, cliente_estado, cliente_numero) values (?,?,?)';
                $stm = $this->pdo->prepare($sql);
                $stm->execute([$model->cliente_nombre, $model->cliente_estado, $model->cliente_numero]);
            }
            return 1;
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return 2;
        }
    }

	public function listarxid($dato){
		try{
			$sql = 'select * from clientes where id_cliente = ?' ;
			$stm = $this->pdo->prepare($sql);
			$stm->execute([$dato]);
			return $stm->fetch();
		} catch (Throwable $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			return [];
		}
	}
}
