<?php
class Silo{
    private $pdo;
    public $ID;
    public $cantidad;
    public $idcultivo;
    public $idtrabajador;
    public $idusuario;
    
    public function __CONSTRUCT(){
        try{
            $this->pdo = Database::StartUp();
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
    public function Listar(){
        try{
            $IDORGANIZACION = $_SESSION['idorganizacion'];
            $result = array();
            $stm = $this->pdo->prepare("select s.idsilo, s.cantidad, c.idcultivo, c.nombre,t.idtrabajador, s.fecha from silo s
            inner join cultivoact ca
            on s.idcultivoact = ca.idcultivoact
            inner join cultivo c
            on ca.idcultivo = c.idcultivo
            inner join trabajador t
            on s.idtrabajador = t.idtrabajador
            inner join usuario u
            on s.idusuario =  u.idusuario
            inner join organizacion o
            on u.idorganizacion = o.idorganizacion
            and o.idorganizacion = '$IDORGANIZACION'");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    
    public function Listar1(){
        try{
            $IDORGANIZACION = $_SESSION['idorganizacion'];
            $result = array();
            $stm= $this->pdo->prepare("SELECT ca.idcultivoact, c.idcultivo, c.idnombre
            from cultivoact ca
            inner join cultivo c
            on ca.idcultivo = c.idcultivo
            and c.estado = 1
            inner join actividad a
            on ca.idactividad = a.idactividad
            and a.nombre = 'cosechar'
            inner join usuario u
            on ca.idusuario = u.idusuario
            inner join organizacion o 
            on u.idorganizacion = o.idorganizacion
            and o.idorganizacion = '$IDORGANIZACiON'");
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        }catch(Exception $e){
          die($e->getMessage());  
        }
    }
    
    public function Listar2(){
        try{
            $IDORGANIZACION = $_SESSION['idorganizacion'];
            $result = array();
            $stm = $this->pdo->prepare("SELECT T.IDTRABAJADOR, T.NOMBRE FROM trabajador T
            INNER JOIN usuario U
            ON T.IDUSUARIO = U.IDUSUARIO
            INNER JOIN organizacion O
            ON U.IDORGANIZACION = O.IDORGANIZACION
            AND O.IDORGANIZACION = '$IDORGANIZACION'");
           
            $stm->execute();
            
            return $stm->fetchAll(PDO::FETCH_OBJ);
            
        }catch(Exception $e){
          die($e->getMessage());  
        }
    }
    
    public function Obtener($ID)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM silo WHERE idsilo = ?");
			          

			$stm->execute(array($ID));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    
    public function Eliminar($ID)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM silo WHERE idsilo = ?");			          

			$stm->execute(array($ID));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    
    public function Registrar(silo $data)
	{
		try 
		{
		$sql = "INSERT INTO silo (cantidad, idcultivoact,idtrabajador, idusuario) 
		        VALUES (?, ?, ?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->cantidad,
                    $data->idcultivoact,
                    $data->idtrabajador,
                    $data->idusuario
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    
}







