<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 19:54
 */
require 'app/models/Menu.php';
require 'app/models/Rol.php';
require 'app/models/Marca.php';
require 'app/models/Archivo.php';
require 'app/models/Builder.php';
class MarcaController{
    //Variables especificas del controlador
    private $menu;
    private $rol;
    private $marca;
    private $archivo;
    private $builder;
    //Variables fijas para cada llamada al controlador
    private $sesion;
    private $encriptar;
    private $log;
    private $validar;
    public function __construct()
    {
        //Instancias especificas del controlador
        $this->menu = new Menu();
        $this->rol = new Rol();
        $this->archivo = new Archivo();
        $this->marca = new Marca();
        $this->builder = new Builder();
        //Instancias fijas para cada llamada al controlador
        $this->encriptar = new Encriptar();
        $this->log = new Log();
        $this->sesion = new Sesion();
        $this->validar = new Validar();
    }
    //Vistas/Opciones
    //Vista de Inicio de La Gestión de Menús
    public function listar(){
        try{
            $this->nav = new Navbar();
			$id_subcategoria = $_GET["id"];
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
			$listarmarcas = $this->marca->listarmarcas();
			$categorias = $this->marca->listarcategorias();
			$datos = json_encode($categorias);
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'marca/listar.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
    public function guardar_marca(){
        $result = 2;
        $message = 'OK';
        try{
            $ok_data = true;
			$formcito = json_decode($_POST['datos']);
            if($ok_data){
				$id = $_POST['id_marca'];
                if($id == null) {
					if($_FILES['marca_imagen']['name'] != null){
						$validar_duplicados = $this->marca->buscar_marcas($_POST['marca_nombre']);
						if($validar_duplicados){
							$result = 3;
							$message = "Ya existe una marca con ese nombre";
						}else{
							if($_FILES['marca_imagen']['name'] != null) {
								$ext = pathinfo($_FILES['marca_imagen']['name'], PATHINFO_EXTENSION);
								$file_path = "media/marcas/" . "marca" . '_' .date('dmYHis') . "." . $ext;
								if($this->archivo->subir_imagen_comprimida($_FILES['marca_imagen']['tmp_name'], $file_path,false)){
									$marca_imagen = $file_path;
								} else {
									$marca_imagen = 'media/marcas/sin-marca-logo.png';
								}
							}else{
								$marca_imagen = 'media/marcas/sin-marca-logo.png';
							}
							$result=$this->builder->save("marca", array(
								'marca_nombre' => $_POST['marca_nombre'],
								'marca_imagen' => $marca_imagen,
								'marca_estado' => $_POST['marca_estado']
							));
							$ult_id = $this->marca->ult_id()->id_marca;
							foreach ($formcito as $f){
								if ($f->valor_check == true){
									$result=$this->builder->save("marca_categoria", array(
										'id_marca' => $ult_id,
										'id_categoria' => $f->id_categoria,
									));
								}
							}
						}
					}else{
						$result = 4;
					}
				}else{
                    $traerid = $_POST['id_marca'];
					$validar_duplicados = $this->marca->buscar_marcas($_POST['marca_nombre']);
					if($validar_duplicados && $traerid!=$id){
						$result = 3;
						$message = "Ya existe una marca con ese nombre";
					}else{
						$id_marca = $_POST['id_marca'];
						if($_FILES['marca_imagen']['name'] != null) {
							$ext = pathinfo($_FILES['marca_imagen']['name'], PATHINFO_EXTENSION);
							$file_path = "media/marcas/" . "marca" . '_' .date('dmYHis') . "." . $ext;
							if($this->archivo->subir_imagen_comprimida($_FILES['marca_imagen']['tmp_name'], $file_path,false)){
								$marca_imagen = $file_path;
							} else {
								$marca_imagen = 'media/marcas/sin-marca-logo.png';
							}
						} else {
							$marca_imagen = $this->marca->listar_x_id($id_marca)->marca_imagen;
						}
						$result=$this->builder->update("marca", array(
							'marca_nombre' => $_POST['marca_nombre'],
							'marca_imagen' => $marca_imagen,
							'marca_estado' => $_POST['marca_estado']
						), array('id_marca' => $_POST['id_marca']));
						$su = 1;
						$datos = json_decode($_POST['datos']);
						foreach($datos as $d){
							$validar = $this->marca->exist($d->id_categoria, $_POST['id_marca']);
							if($validar == false && $d->valor_check==true){
								$result=$this->builder->save("marca_categoria", array(
									'id_marca' => $_POST['id_marca'],
									'id_categoria' => $d->id_categoria,
								));
							}elseif ($validar!=null && $d->valor_check==false){
								$eliminar = $this->marca->exist($d->id_categoria, $_POST['id_marca'])->id_marca_categoria;
								$D = $this->marca->delete($eliminar);
								$result= 1;
							}else{
								$su++;
								$result = 1;
							}
						}
					}
				}
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
	public function mostrardatos(){
		$ok_data = true;
		$result = 2;
		$message = 'OK';
		try{
			if($ok_data){
				$result = $this->marca->listar_x_id($_POST['id_marca']);
				$check = $this->marca->traer_check($_POST['id_marca']);
			} else {
				$result = 6;
				$message = "Integridad de datos fallida. Algún parametro se está enviando mal";
			}
		} catch (Exception $e){
			$this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
			$message = $e->getMessage();
		}
		echo json_encode(array("result" => array("code" => $result, "check"=>$check, "message" => $message)));
	}
}

