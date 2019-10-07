<?php
require_once 'model/cultivo.php';

class CultivoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cultivo();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/crearcultivo.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new Cultivo();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/crearcultivo.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/vercultivos.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new Cultivo();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/editarcultivo.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new Cultivo();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->area = $_REQUEST['area'];

        $alm->ID > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: directioner.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IDCULTIVO']);
        header('Location: directioner.php');
    }
}
