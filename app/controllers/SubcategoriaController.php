<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 19/10/2020
 * Time: 19:54
 */
require 'app/models/Menu.php';
require 'app/models/Rol.php';
require 'app/models/Subcategoria.php';
require 'app/models/Categoria.php';
require 'app/models/Builder.php';
class SubcategoriaController{
    //Variables especificas del controlador
    private $menu;
    private $rol;
    private $subcategoria;
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
        $this->subcategoria = new Subcategoria();
        $this->builder = new Builder();
        //Instancias fijas para cada llamada al controlador
        $this->encriptar = new Encriptar();
        $this->log = new Log();
        $this->sesion = new Sesion();
        $this->validar = new Validar();
    }
    //Vistas/Opciones
    //Vista de Inicio de La Gestión de Menús
    public function inicio(){
        try{
            //Llamamos a la clase del Navbar, que sólo se usa
            // en funciones para llamar vistas y la instaciamos
            $this->nav = new Navbar();
			$id_categoria = $_GET["id"];
            $navs = $this->nav->listar_menus($this->encriptar->desencriptar($_SESSION['ru'],_FULL_KEY_));
            //Traemos los menus registrados
            //$categorias = $this->categoria->listar_categorias($id_familia);
            $subcategorias = $this->subcategoria->listar_subcategorias($id_categoria);
            $nombrecat = $this->subcategoria->listarxnombre($id_categoria);
            //Hacemos el require de los archivos a usar en las vistas
            require _VIEW_PATH_ . 'header.php';
            require _VIEW_PATH_ . 'navbar.php';
            require _VIEW_PATH_ . 'subcategoria/inicio.php';
            require _VIEW_PATH_ . 'footer.php';
        } catch (Throwable $e){
            //En caso de errores insertamos el error generado y redireccionamos a la vista de inicio
            $this->log->insertar($e->getMessage(), get_class($this).'|'.__FUNCTION__);
            echo "<script language=\"javascript\">alert(\"Error Al Mostrar Contenido. Redireccionando Al Inicio\");</script>";
            echo "<script language=\"javascript\">window.location.href=\"". _SERVER_ ."\";</script>";
        }
    }
	public function guardar_subcategoria(){
		$result = 2;
		$message = 'OK';
		try{
			$ok_data = true;
			$ok_data = $this->validar->validar_parametro('subcategoria_nombre', 'POST',true,$ok_data,50,'texto',0);
			$ok_data = $this->validar->validar_parametro('subcategoria_estado', 'POST',true,$ok_data,1,'numero',0);
			$ok_data = $this->validar->validar_parametro('id_categoria', 'POST',false,$ok_data,11,'numero',0);
			if($ok_data){
				$id_categoria = $_POST["id_categoria"];
				$id = $_POST['id_subcategoria'];
				if($id == null){
					$validar_duplicados = $this->subcategoria->buscar_subcategoria($_POST['subcategoria_nombre']);
					if($validar_duplicados){
						$result = 3;
						$message = "Ya existe una subcategoria con ese nombre";
					} else {
                        $result=$this->builder->save("sub_categoria", array(
                            "id_categoria" => $id_categoria,
                            "subcategoria_nombre" => $_POST['subcategoria_nombre'],
                            "subcategoria_estado" => $_POST['subcategoria_estado']
                        ));
					}
				}else{
                    $validar_nombre = $this->subcategoria->buscar_subcategoria($_POST['subcategoria_nombre']);
					$valider_nombre_id = $this->subcategoria->buscar_subcategoria_id($_POST['subcategoria_nombre'],$_POST['id_subcategoria']);
                    if($validar_nombre->id_subcategoria != $valider_nombre_id->id_subcategoria){
                        $result = 3;
                        $message = "Ya existe una subcategoria con ese nombre";
                    }else{
                        $result=$this->builder->update("sub_categoria", array(
                            "id_categoria" => $_POST['id_categoria'],
                            "subcategoria_nombre" => $_POST['subcategoria_nombre'],
                            "subcategoria_estado" => $_POST['subcategoria_estado']
                        ), array(
                            "id_subcategoria" => $_POST['id_subcategoria']
                        ));
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
		echo json_encode(array("result" => array("code" => $result, "message" => $message,"id_subcategoria"=>$id)));
	}
    //Funcion para guardar un nuevo menú creado
    public function guardar_opcion(){
        //Array donde vamos a almacenar los cambios, en caso hagamos alguno
        $opcion = [];
        //Código de error general
        $result = 2;
        //Mensaje a devolver en caso de hacer consulta por app
        $message = 'OK';
        try{
            $ok_data = true;
            //Validamos que todos los parametros a recibir sean correctos. De ocurrir un error de validación,
            //$ok_true se cambiará a false y finalizara la ejecucion de la funcion
            $ok_data = $this->validar->validar_parametro('opcion_nombre', 'POST',true,$ok_data,30,'texto',0);
            $ok_data = $this->validar->validar_parametro('opcion_funcion', 'POST',true,$ok_data,35,'texto',0);
            $ok_data = $this->validar->validar_parametro('opcion_icono', 'POST',false,$ok_data,20,'texto',0);
            $ok_data = $this->validar->validar_parametro('opcion_mostrar', 'POST',true,$ok_data,11,'numero',0);
            $ok_data = $this->validar->validar_parametro('opcion_orden', 'POST',true,$ok_data,11,'numero',0);
            $ok_data = $this->validar->validar_parametro('opcion_estado', 'POST',true,$ok_data,11,'numero',0);
            $ok_data = $this->validar->validar_parametro('id_menu', 'POST',true,$ok_data,11,'numero',0);
            //Validamos el id_menu y menu_estado, en caso este sea declarado para editar opciones
            $ok_data = $this->validar->validar_parametro('id_opcion', 'POST',false,$ok_data,11,'numero',0);

            //Validacion de datos
            if($ok_data){
                //Creamos el modelo y ingresamos los datos a guardar
                $model = new Menu();
                //Si $_POST['id_opcion'] tiene datos, quiere decir que se va a editar una opción.
                //Caso contrario, procedemos a validar el duplicado de funciones por opción
                if(!empty($_POST['id_opcion'])){
                    $model->id_opcion = $_POST['id_opcion'];
                    $validar_duplicados = false;
                } else {
                    $validar_duplicados = $this->menu->buscar_opcion_menu($_POST['id_menu'],strtolower($_POST['opcion_funcion']));
                }
                //Validamos la duplicidad del $_POST['menu_controlador'], para evitar duplicados
                if($validar_duplicados){
                    //Código 3: Controlador duplicado
                    $result = 3;
                    $message = "Ya existe una opción con ese menu registrado";
                } else {
                    $model->id_menu = $_POST['id_menu'];
                    $model->opcion_nombre = $_POST['opcion_nombre'];
                    $model->opcion_funcion = strtolower($_POST['opcion_funcion']);
                    $model->opcion_icono = $_POST['opcion_icono'];
                    $model->opcion_mostrar = $_POST['opcion_mostrar'];
                    $model->opcion_orden = $_POST['opcion_orden'];
                    $model->opcion_estado = $_POST['opcion_estado'];
                    //Guardamos el menú y recibimos el resultado
                    $result = $this->menu->guardar_opcion($model);
                    if($result == 1){
                        //Validamos si result es igual a 1 y si esta declarado el id_menu,
                        //para devolver los datos que fueron editados
                        if(!empty($_POST['id_opcion'])){
                            $opcion = array(
                                "id_opcion" => $_POST['id_opcion'],
                                "opcion_nombre" => $_POST['opcion_nombre'],
                                "opcion_funcion" => $_POST['opcion_funcion'],
                                "opcion_icono" => $_POST['opcion_icono'],
                                "opcion_mostrar" => $_POST['opcion_mostrar'],
                                "opcion_orden" => $_POST['opcion_orden'],
                                "opcion_estado" => $_POST['opcion_estado']
                            );
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
        echo json_encode(array("result" => array("code" => $result, "message" => $message, "opcion" => $opcion)));
    }
    //Funcion para guardar un nuevo menú creado
    public function configurar_relacion(){
        //Array donde vamos a almacenar los cambios, en caso hagamos alguno
        $menu = [];
        //Código de error general
        $result = 2;
        //Mensaje a devolver en caso de hacer consulta por app o web
        $message = 'OK';
        try{
            $ok_data = true;
            //Validamos que todos los parametros a recibir sean correctos. De ocurrir un error de validación,
            //$ok_true se cambiará a false y finalizara la ejecucion de la funcion
            //Validamos el id_menu y menu_estado, en caso este sea declarado para editar menus
            $ok_data = $this->validar->validar_parametro('id_menu', 'POST',false,$ok_data,11,'numero',0);
            $ok_data = $this->validar->validar_parametro('id_rol', 'POST',false,$ok_data,11,'numero',0);
            $ok_data = $this->validar->validar_parametro('relacion', 'POST',false,$ok_data,11,'numero',0);

            //Validacion de datos
            if($ok_data){
                //Verificamos que relacion tenga los valores deseados
                if($_POST['relacion'] == 1 || $_POST['relacion'] == 0){
                    //Si $_POST['relacion'] es igual a 1, creamos la relacion. Si es 0, eliminamos la relación
                    switch (intval($_POST['relacion'])){
                        case 0:
                            $result = $this->menu->eliminar_relacion($_POST['id_rol'], $_POST['id_menu']);
                            break;
                        case 1:
                            $result = $this->menu->agregar_relacion($_POST['id_rol'], $_POST['id_menu']);
                            break;
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
        echo json_encode(array("result" => array("code" => $result, "message" => $message, "menu" => $menu)));
    }
    //Sirve para agregar el permiso a la opción
    public function agregar_permiso(){
        //Array donde vamos a almacenar los cambios, en caso hagamos alguno
        $permiso = [];
        //Código de error general
        $result = 2;
        //Mensaje a devolver en caso de hacer consulta por app
        $message = 'OK';
        try{
            $ok_data = true;
            //Validamos que todos los parametros a recibir sean correctos. De ocurrir un error de validación,
            //$ok_true se cambiará a false y finalizara la ejecucion de la funcion
            $ok_data = $this->validar->validar_parametro('permiso_accion', 'POST',true,$ok_data,30,'texto',0);
            $ok_data = $this->validar->validar_parametro('id_opcion', 'POST',true,$ok_data,11,'numero',0);
            //Validacion de datos
            if($ok_data){
                //Creamos el modelo y ingresamos los datos a guardar
                $model = new Menu();
                //Si $_POST['id_opcion'] tiene datos, quiere decir que se va a editar una opción.
                //Caso contrario, procedemos a validar el duplicado de funciones por opción
                /*if(!empty($_POST['id_permiso'])){
                    $model->id_opcion = $_POST['id_permiso'];
                    $validar_duplicados = false;
                } else {
                    $validar_duplicados = $this->menu->buscar_permiso_opcion($_POST['id_opcion'], $_POST['permiso_accion']);
                }*/
                $validar_duplicados = $this->menu->buscar_permiso_opcion($_POST['id_opcion'], $_POST['permiso_accion']);
                //Validamos la duplicidad del $_POST['permiso_accion'], para evitar duplicados
                if($validar_duplicados){
                    //Código 3: Controlador duplicado
                    $result = 3;
                    $message = "Ya existe un permiso en la opción consultada";
                } else {
                    $model->id_opcion = $_POST['id_opcion'];
                    $model->permiso_accion = strtolower(str_replace(" ", "",$_POST['permiso_accion']));
                    $model->permiso_estado = $_POST['permiso_estado'];
                    //Guardamos el menú y recibimos el resultado
                    $result = $this->menu->guardar_permiso($model);
                    /*if($result == 1){
                        //Validamos si result es igual a 1 y si esta declarado el id_menu,
                        //para devolver los datos que fueron editados
                        if(!empty($_POST['id_permiso'])){
                            $permiso = array(
                                "id_permiso" => $_POST['id_permiso'],
                                "permiso_accion" => $_POST['permiso_accion'],
                                "permiso_estado" => $_POST['permiso_estado']
                            );
                        }
                    }*/
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
        echo json_encode(array("result" => array("code" => $result, "message" => $message, "permiso" => $permiso)));
    }
    //Se usa para eliminar un permiso asignado a una opción
    public function eliminar_permiso(){
    //Array donde vamos a almacenar los cambios, en caso hagamos alguno
        $permiso = [];
        //Código de error general
        $result = 2;
        //Mensaje a devolver en caso de hacer consulta por app
        $message = 'OK';
        try{
            $ok_data = true;
            //Validamos que todos los parametros a recibir sean correctos. De ocurrir un error de validación,
            //$ok_true se cambiará a false y finalizara la ejecucion de la funcion
            $ok_data = $this->validar->validar_parametro('id_permiso', 'POST',true,$ok_data,11,'numero',0);
            //Validacion de datos
            if($ok_data){
                //Eliminamos el permiso
                $result = $this->menu->eliminar_permiso($_POST['id_permiso']);
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
        echo json_encode(array("result" => array("code" => $result, "message" => $message, "permiso" => $permiso)));
    }
    //Funcion para configurar las restriccion de una opción a un rol en especifico
    public function configurar_acceso(){
        //Código de error general
        $result = 2;
        //Mensaje a devolver en caso de hacer consulta por app o web
        $message = 'OK';
        try{
            $ok_data = true;
            //Validamos que todos los parametros a recibir sean correctos. De ocurrir un error de validación,
            //$ok_true se cambiará a false y finalizara la ejecucion de la funcion
            //Validamos el id_menu y menu_estado, en caso este sea declarado para editar menus
            $ok_data = $this->validar->validar_parametro('id_rol', 'POST',false,$ok_data,11,'numero',0);
            $ok_data = $this->validar->validar_parametro('id_opcion', 'POST',false,$ok_data,11,'numero',0);
            $ok_data = $this->validar->validar_parametro('relacion', 'POST',false,$ok_data,11,'numero',0);

            //Validacion de datos
            if($ok_data){
                //Verificamos que relacion tenga los valores deseados
                if($_POST['relacion'] == 1 || $_POST['relacion'] == 0){
                    //Si $_POST['relacion'] es igual a 1, creamos la relacion. Si es 0, eliminamos la relación
                    switch (intval($_POST['relacion'])){
                        case 0:
                            $result = $this->menu->agregar_restriccion($_POST['id_rol'], $_POST['id_opcion']);
                            break;
                        case 1:
                            $result = $this->menu->eliminar_restriccion($_POST['id_rol'], $_POST['id_opcion']);
                            break;
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

	public function mostrar(){
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
				$result = $this->subcategoria->listarxid($dato);
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
}