<?php
class ControlCalidad
{
    
	private $pdo;
    public $ID;
    public $nombre;
    public $idtipoc;
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

			$stm = $this->pdo->prepare("SELECT CC.IDCONTROLCALIDAD, CC.NOMBRE, T.TIPO AS TIPO
FROM controlcalidad CC
INNER JOIN tipocontrol T
INNER JOIN usuario U
INNER JOIN organizacion O
WHERE CC.IDTIPOC = T.IDTIPOC
AND CC.IDUSUARIO = U.IDUSUARIO
AND U.IDORGANIZACION = O.IDORGANIZACION
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
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tipocontrol");
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
			          ->prepare("SELECT * FROM controlcalidad WHERE idcontrolcalidad = ?");
			          

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
			            ->prepare("DELETE FROM controlcalidad WHERE idcontrolcalidad = ?");			          

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
			$sql = "UPDATE controlcalidad SET 
						nombre          = ?, 
						idtipoc        = ?
				    WHERE idcontrolcalidad = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->idtipoc,
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(ControlCalidad $data)
	{
		try 
		{
		$sql = "INSERT INTO controlcalidad (nombre,idtipoc,idusuario) 
		        VALUES (?, ?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->idtipoc,
                    $data->idusuario
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
