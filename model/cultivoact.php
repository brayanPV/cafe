<?php
class Cultivoact
{
    
	private $pdo;
    public $ID;
    public $nombre;
    public $apellido;
    public $telefono;

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

			$stm = $this->pdo->prepare("SELECT CA.IDCULTIVOACT, C.IDCULTIVO, C.NOMBRE AS NOMBRECULTIVO, A.IDACTIVIDAD, A.NOMBRE AS NOMBREACTIVIDAD, T.IDTRABAJADOR, T.NOMBRE AS NOMBRETRABAJADOR, CA.FECHA
FROM cultivoacr CA
INNER JOIN cultivo C 
ON CA.IDCULTIVO=C.IDCULTIVO
INNER JOIN actividad A 
ON CA.IDACTIVIDAD = A.IDACTIVIDAD
INNER JOIN trabajador T 
ON CA.IDTRABAJADOR = T.IDTRABAJADOR");
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

			$stm = $this->pdo->prepare("SELECT * FROM trabajador");
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

			$stm = $this->pdo->prepare("SELECT * FROM actividad");
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
			          ->prepare("SELECT * FROM trabajador WHERE idtrabajador = ?");
			          

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
			            ->prepare("DELETE FROM trabajador WHERE idtrabajador = ?");			          

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
			$sql = "UPDATE trabajador SET 
						nombre          = ?, 
						apellido        = ?,
						telefono 		= ?
				    WHERE idtrabajador = ?";

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

	public function Registrar(Cultivoact $data)
	{
		try 
		{
		$sql = "INSERT INTO cultivoact (IDCULTIVO,IDACTIVIDAD,IDTRABAJADOR) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->IDCULTIVO,
                    $data->IDACTIVIDAD,
					$data->IDTRABAJADOR
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
