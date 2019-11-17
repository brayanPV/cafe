<?php
require_once 'model/actividad.php';

class ActividadController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Actividad();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/crearactividad.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new Actividad();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/crearactividad.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/veractividadcreada.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new Actividad();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/editaractividad.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new Actividad();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->idusuario= $_REQUEST['idusuario'];
        
        $alm->ID > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: directioner.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IDACTIVIDAD']);
        header('Location: directioner.php');
    }
}
