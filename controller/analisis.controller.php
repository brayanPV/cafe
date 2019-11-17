<?php
require_once 'model/analisis.php';

class AnalisisController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Analisis();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/reganalisissuelo.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new Analisis();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/reganalisissuelo.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/veranalisis.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new Analisis();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new Analisis();
        
        $alm->IDCULTIVO = $_REQUEST['idcultivo'];
        $alm->PROPIEDAD1 = $_REQUEST['propiedad1'];
        $alm->PROPIEDAD2 = $_REQUEST['propiedad2'];
		$alm->PROPIEDAD3 = $_REQUEST['propiedad3'];
		$alm->PROPIEDAD4 = $_REQUEST['propiedad4'];
        $alm->IDUSUARIO = $_REQUEST['idusuario'];

        $alm->ID > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: directioner.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID']);
        header('Location: directioner.php');
    }
}
