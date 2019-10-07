<?php
require_once 'model/usuario.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/crearcultivo.php';
        require_once 'view/partials/footer.php';
    }
    
    public function Crud(){
        $alm = new Usuario();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/crearusuario.php';
        require_once 'view/partials/footer.php';
    }
	
	public function Ver(){
		require_once 'view/partials/header.php';
        require_once 'view/verusuarios.php';
        require_once 'view/partials/footer.php';
	}
	
	public function Editar(){
		$alm = new Usuario();
		if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
		
		require_once 'view/partials/header.php';
        require_once 'view/editarusuario.php';
        require_once 'view/partials/footer.php';
	}
    
    public function Guardar(){
        $alm = new Usuario();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->apellido = $_REQUEST['apellido'];
		$alm->nomusuario = $_REQUEST['nomusuario'];
        $alm->password = $_REQUEST['password'];

        $alm->ID > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: directioner.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['IDUSUARIO']);
        header('Location: directioner.php');
    }
}
