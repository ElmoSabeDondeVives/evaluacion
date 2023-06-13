<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 20:01
 */
class Proveedor{
    private $pdo;
    private $log;

    public function __construct(){
        $this->pdo = Database::getConnection();
        $this->log = new Log();
    }
    public function listar_proveedores(){
        try{
            $sql = 'select * from proveedores';
//            $sql = 'select * from productos p inner join categorias c on p.id_categoria = c.id_categoria inner join usuarios u on p.producto_creador = u.id_usuario where id_subcategoria = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([]);
            return $stm->fetchAll();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function listar_x_nombre($nombre){
        try{
            $sql = 'select * from proveedores where proveedor_nombre = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$nombre]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function listar_update($nombre,$id){
        try{
            $sql = 'select * from proveedores where proveedor_nombre = ? and id_proveedor = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$nombre,$id]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }
    public function jalar_edit($id){
        try{
            $sql = 'select * from proveedores where id_proveedor = ?';
            $stm = $this->pdo->prepare($sql);
            $stm->execute([$id]);
            return $stm->fetch();
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            return [];
        }
    }

}
