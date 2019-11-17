<?php
require_once 'model/controlcalidad.php';

class ControlCalidadController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new ControlCalidad();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/index.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new ControlCalidad();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/crearcontrolcalidad.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/vercontrolcalidadcreado.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new ControlCalidad();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/editarcontrolcalidad.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new ControlCalidad();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->idtipoc = $_REQUEST['tipo'];
        $alm->idusuario = $_REQUEST['idusuario'];

        $alm->ID > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: directioner.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IDCONTROLCALIDAD']);
        header('Location: directioner.php');
    }
}
