<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 19:54
 */
require 'app/models/Menu.php';
require 'app/models/Rol.php';
require 'app/models/Familias.php';
require 'app/models/Builder.php';
class FamiliasController{
    private $menu;
    private $rol;
    private $familias;
    private $buider;
    private $sesion;
    private $encriptar;
    private $log;
    private $validar;
    public function __construct()
    {
        //Instancias especificas del controlador
        $this->menu = new Menu();
        $this->rol = new Rol();
        $this->familias = new Familias();
        $this->buider = new Builder();
        //Instancias fijas para cada llamada al controlador
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
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
            //Traemos los menus registrados
            //$familias = $this->familias->listar_familias();
			$familias = $this->buider->list("familias", array(
				"*"
			)  );
            //Hacemos el require de los archivos a usar en las vistas
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'familias/inicio.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            //En caso de errores insertamos el error generado y redireccionamos a la vista de inicio
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
	public function guardar_familia(){
		$result = 2;
		$message = 'OK';
		try{
			$ok_data = true;
			$ok_data= $this->validar->validar_parametro('familia_nombre', 'POST',true,$ok_data,50,'texto',0);
			$ok_data = $this->validar->validar_parametro('familia_estado', 'POST',false,$ok_data,1,'numero',0);
			if($ok_data){
				$id = $_POST['id_familia'];
				if($id == null){
					$validar_duplicado_nombre = $this->familias->validar_nombre($_POST['familia_nombre']);
					$validar_duplicado_serie = $this->familias->buscar_familiaxserie($_POST['familia_serie']);
					if($validar_duplicado_serie){
						$result = 4;
						$message = "Ya existe una familia con esa serie";
					}else{
						if($validar_duplicado_nombre){
							$result = 3;
							$message = "Ya existe una familia con ese nombre";
						}else{
							$result=$this->buider->save("familias", array(
								'familia_nombre' => $_POST['familia_nombre'],
								'familia_descripcion' => $_POST['familia_descripcion'],
								'familia_serie' => $_POST['familia_serie'],
								'familia_estado' => $_POST['familia_estado']
							));
						}
					}
				}else{
					$validar_nombre = $this->familias->validar_nombre($_POST['familia_nombre']);
					$validar_nombre_id = $this->familias->validar_nombre_id($_POST['familia_nombre'],$_POST['id_familia']);
					if($validar_nombre->familia_nombre != $validar_nombre_id->familia_nombre){
						$result = 3;
						$message = "Ya existe una familia con ese nombre";
					}else{
						$result=$this->buider->update("familias", array(
							'familia_nombre' => $_POST['familia_nombre'],
							'familia_descripcion' => $_POST['familia_descripcion'],
							'familia_serie' => $_POST['familia_serie'],
							'familia_estado' => $_POST['familia_estado']
						), array('id_familia' => $_POST['id_familia'],
						));
					}
				}
			}else{
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
	public function mostrar(){
		$ok_data = true;
		$result = 2;
		$message = 'OK';
		try{
			if($ok_data){
				$dato = $_POST['guardarid'];
				$result = $this->familias->listarxid($dato);
			}else{
				$result = 6;
				$message = "Integridad de datos fallida. Algún parametro se está enviando mal";
			}
		}catch (Exception $e){
			//Registramos el error generado y devolvemos el mensaje enviado por PHP
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			$message = $e->getMessage();
		}
		echo json_encode(array("result" => array("code" => $result, "message" => $message)));
	}
}