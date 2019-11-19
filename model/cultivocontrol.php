<?php
class CultivoControl
{
    
	private $pdo;
    public $ID;
    public $idcultivo;
    public $idcontrolcalidad;
    public $idtrabajador;

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
			$result = array();

			$stm = $this->pdo->prepare("SELECT CC.IDCULTIVOCONTROL, C.IDCULTIVO, C.NOMBRE AS NOMBRECULTIVO, CAL.IDCONTROLCALIDAD, CAL.NOMBRE AS NOMBRECONTROL, T.IDTRABAJADOR, T.NOMBRE AS NOMBRETRABAJADOR, CC.FECHA
FROM CULTIVOCONTROL CC
INNER JOIN cultivo C
ON CC.IDCULTIVO = C.IDCULTIVO
INNER JOIN controlcalidad CAL
ON CC.IDCONTROLCALIDAD = CAL.IDCONTROLCALIDAD
INNER JOIN trabajador T
ON CC.IDTRABAJADOR = T.IDTRABAJADOR");
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
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cultivo");
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
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM controlcalidad");
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
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM trabajador");
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
			          ->prepare("SELECT * FROM cultivocontrol WHERE IDCULTIVOCONTROL = ?");
			          

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
			            ->prepare("DELETE FROM cultivocontrol WHERE IDCULTIVOCONTROL = ?");			          

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
		$sql = "INSERT INTO cultivocontrol (idcultivo,idcontrolcalidad,idtrabajador) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idcultivo,
                    $data->idcontrolcalidad,
					$data->idtrabajador
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
