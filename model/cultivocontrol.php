<?php
class CultivoControl
{
    
	private $pdo;
    public $ID;
    public $idcultivo;
    public $idcontrolcalidad;
    public $idtrabajador;
    public $IDORGANIZACION;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

    
    
    
	public function Listar()
	{
		try
		{
            $IDORGANIZACION = $_SESSION['idorganizacion'];
			$result = array();

			$stm = $this->pdo->prepare("SELECT CC.IDCULTIVOCONTROL, C.IDCULTIVO, C.NOMBRE AS NOMBRECULTIVO, CAL.IDCONTROLCALIDAD, CAL.NOMBRE AS NOMBRECONTROL, T.IDTRABAJADOR, T.NOMBRE AS NOMBRETRABAJADOR, CC.FECHA
FROM CULTIVOCONTROL CC
INNER JOIN CULTIVO C
ON CC.IDCULTIVO = C.IDCULTIVO
INNER JOIN CONTROLCALIDAD CAL
ON CC.IDCONTROLCALIDAD = CAL.IDCONTROLCALIDAD
INNER JOIN TRABAJADOR T
ON CC.IDTRABAJADOR = T.IDTRABAJADOR
INNER JOIN USUARIO U
ON CC.IDUSUARIO = U.IDUSUARIO
INNER JOIN ORGANIZACION O
ON U.IDORGANIZACION = O.IDORGANIZACION
AND O.IDORGANIZACION = '$IDORGANIZACION'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Listar1()
	{
		try
		{
            $IDORGANIZACION = $_SESSION['idorganizacion'];
			$result = array();

			$stm = $this->pdo->prepare("SELECT c.IDCULTIVO, c.NOMBRE FROM cultivo c
            INNER JOIN USUARIO U INNER JOIN ORGANIZACION O WHERE C.IDUSUARIO = U.IDUSUARIO AND U.IDORGANIZACION = O.IDORGANIZACION AND O.IDORGANIZACION = '$IDORGANIZACION'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Listar2()
	{
		try
		{
            $IDORGANIZACION = $_SESSION['idorganizacion'];
			$result = array();

			$stm = $this->pdo->prepare("SELECT CC.IDCONTROLCALIDAD, CC.NOMBRE FROM controlcalidad CC
            INNER JOIN USUARIO U
            ON CC.IDUSUARIO = U.IDUSUARIO
            INNER JOIN ORGANIZACION O
            ON U.IDORGANIZACION = O.IDORGANIZACION
            AND O.IDORGANIZACION = '$IDORGANIZACION'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Listar3()
	{
		try
		{
            $IDORGANIZACION = $_SESSION['idorganizacion'];
			$result = array();
            
			$stm = $this->pdo->prepare("SELECT T.IDTRABAJADOR, T.NOMBRE FROM trabajador T
            INNER JOIN USUARIO U
            ON T.IDUSUARIO = U.IDUSUARIO
            INNER JOIN ORGANIZACION O
            ON U.IDORGANIZACION = O.IDORGANIZACION
            AND O.IDORGANIZACION = '$IDORGANIZACION'");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($ID)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM CULTIVOCONTROL WHERE IDCULTIVOCONTROL = ?");
			          

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
			            ->prepare("DELETE FROM CULTIVOCONTROL WHERE IDCULTIVOCONTROL = ?");			          

			$stm->execute(array($ID));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->apellido,
						$data->telefono,
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(CultivoControl $data)
	{
		try 
		{
		$sql = "INSERT INTO cultivocontrol (idcultivo,idcontrolcalidad,idtrabajador, IDUSUARIO) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idcultivo,
                    $data->idcontrolcalidad,
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
