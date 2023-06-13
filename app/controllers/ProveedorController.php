<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 19:54
 */
require 'app/models/Menu.php';
require 'app/models/Rol.php';
require 'app/models/Proveedor.php';
require 'app/models/Archivo.php';
require 'app/models/Builder.php';
class ProveedorController{
    private $menu;
    private $rol;
    private $proveedor;
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
        $this->proveedor = new Proveedor();
        $this->builder = new Builder();
        $this->encriptar = new Encriptar();
        $this->log = new Log();
        $this->sesion = new Sesion();
        $this->validar = new Validar();
    }
    public function proveedores(){
        try{
            $this->nav = new Navbar();
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
			$proveedores = $this->proveedor->listar_proveedores();
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'proveedor/proveedores.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
	public function guardar_editar_proveedor(){
		$result = 2;
		$message = 'OK';
		try{
			$ok_data = true;
//			$ok_data = $this->validar->validar_parametro('proveedor_nombre', 'POST',true,$ok_data,100,'texto',0);

//			$ok_data = $this->validar->validar_parametro('proveedor_telefono', 'POST',true,$ok_data,9,'numero',0);
			if($ok_data){
				$id = $_POST['id_proveedor'];
				if($id == null){
					$validar_nombre = $this->proveedor->listar_x_nombre($_POST['proveedor_nombre']);
					if($validar_nombre){
						$result = 3;
					}else{
						$result = $this->builder->save("proveedores", array(
							"proveedor_nombre" => $_POST['proveedor_nombre'],
							"proveedor_direccion" => $_POST['proveedor_direccion'],
							"proveedor_telefono" => $_POST['proveedor_telefono'],
							"proveedor_estado" => $_POST['proveedor_estado'],
						));
					}
				}else{
					$nombre = $this->proveedor->listar_x_nombre($_POST['proveedor_nombre']);
					$validar_update = $this->proveedor->listar_update($_POST['proveedor_nombre'],$_POST['id_proveedor']);
					if($validar_update->id_proveedor != $nombre->id_proveedor){
						$result = 3;
					}else{
						$result = $this->builder->update("proveedores", array(
							"proveedor_nombre" => $_POST['proveedor_nombre'],
							"proveedor_direccion" => $_POST['proveedor_direccion'],
							"proveedor_telefono" => $_POST['proveedor_telefono'],
							"proveedor_estado" => $_POST['proveedor_estado'],
						), array('id_proveedor' => $_POST['id_proveedor']
						));
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
	public function editar(){
		$ok_data = true;
		$result = 2;
		$message = 'OK';
		try{
			if($ok_data){
				$dato = $_POST['guardarid'];
				$result = $this->proveedor->jalar_edit($dato);
			} else {
				$result = 6;
				$message = "Integridad de datos fallida. Algún parametro se está enviando mal";
			}
		} catch (Exception $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			$message = $e->getMessage();
		}
		echo json_encode(array("result" => array("code" => $result, "message" => $message)));
	}

}

