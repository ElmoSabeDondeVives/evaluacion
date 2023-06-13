<?php
class QuispeController{
    //Variables fijas para cada llamada al controlador
    private $log;
    private $sesion;
    private $encriptar;
    private $validar;
    public function __construct()
    {
        $this->log = new Log();
        $this->sesion = new Sesion();
        $this->encriptar = new Encriptar();
        $this->validar = new Validar();
    }
    //Vistas/Opciones
    //Vista de acceso al login
    public function inicio(){
        require _VIEW_PATH_ . 'quispe/header.php';
        require _VIEW_PATH_ . 'quispe/inicio.php';
        require _VIEW_PATH_ . 'quispe/footer.php';
    }

	public function detalle_producto(){
		require _VIEW_PATH_ . 'quispe/header.php';
		require _VIEW_PATH_ . 'quispe/detalleproducto/detalle.php';
		require _VIEW_PATH_ . 'quispe/footer.php';
	}

}
