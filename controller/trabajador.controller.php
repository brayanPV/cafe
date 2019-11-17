<?php
require_once 'model/trabajador.php';

class TrabajadorController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Trabajador();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/index.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new Trabajador();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/creartrabajador.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/vertrabajador.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new Trabajador();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/editartrabajador.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new Trabajador();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellido = $_REQUEST['apellido'];
		$alm->telefono = $_REQUEST['telefono'];
        $alm->cedula = $_REQUEST['cedula'];
        $alm->idusuario = $_REQUEST['idusuario'];

        $alm->ID > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: directioner.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IDTRABAJADOR']);
        header('Location: directioner.php');
    }
}
