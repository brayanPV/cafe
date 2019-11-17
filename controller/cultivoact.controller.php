<?php
require_once 'model/cultivoact.php';

class CultivoactController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cultivoact();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/regactividad.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new Cultivoact();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/regactividad.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/veractividad.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new Cultivoact();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/editarcultivo.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new Cultivoact();
        
        $alm->IDCULTIVO = $_REQUEST['cultivo'];
        $alm->IDACTIVIDAD = $_REQUEST['actividad'];
        $alm->IDTRABAJADOR = $_REQUEST['trabajador'];
        $alm->IDUSUARIO = $_REQUEST['idusuario'];

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
