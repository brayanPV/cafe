<?php
require_once 'model/cultivocontrol.php';

class CultivoControlController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new CultivoControl();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/verregplaga.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new CultivoControl();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/asociarcontrol.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/vercontrolasociado.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new CultivoControl();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/editarcultivo.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new CultivoControl();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->idcultivo = $_REQUEST['cultivo'];
        $alm->idcontrolcalidad = $_REQUEST['control'];
		$alm->idtrabajador = $_REQUEST['trabajador'];
        $alm->idusuario = $_REQUEST['idusuario'];

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

