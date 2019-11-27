<?php
require_once 'model/silo.php';

class SiloController{
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new silo();
    }
    
    public function Index(){
        require_once 'view/partials/header.php';
        require_once 'view/crearcultivo.php';
        require_once 'view/partials/footer.php';  
    }
    
    public function crud(){
        $alm = new Silo();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->Obtener($_REQUEST['ID']);
        }
        
        require_once 'view/partials/header.php';
        require_once 'view/agregarsilo.php';
        require_once 'view/partials/footer.php'; 
    }
    
    public function Ver(){
        require_once 'view/partials/header.php';
        require_once 'view/versilo.php';
        require_once 'view/partials/footer.php';   
    }
    
    public function Guardar(){
        $alm = new Inventario();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->cantidad = $_REQUEST['cantidad'];
        $alm->cultivoact = $_REQUEST['idcultivoact'];
        $alm->trabajador = $_REQUEST['idtrabajador'];
        $alm->usuario = $_REQUEST['idusuario'];
        
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
