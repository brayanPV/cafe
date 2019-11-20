<?php
class Cultivoact
{
    
	private $pdo;
    public $ID;
    public $nombre;
    public $apellido;
    public $telefono;
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

			$stm = $this->pdo->prepare("SELECT CA.IDCULTIVOACT, C.IDCULTIVO, C.NOMBRE AS NOMBRECULTIVO, A.IDACTIVIDAD, A.NOMBRE AS NOMBREACTIVIDAD, T.IDTRABAJADOR, T.NOMBRE AS NOMBRETRABAJADOR, CA.FECHA
FROM cultivoact CA
INNER JOIN cultivo C 
ON CA.IDCULTIVO=C.IDCULTIVO
INNER JOIN actividad A 
ON CA.IDACTIVIDAD = A.IDACTIVIDAD
INNER JOIN trabajador T 
ON CA.IDTRABAJADOR = T.IDTRABAJADOR
INNER JOIN usuario U
ON CA.IDUSUARIO = U.IDUSUARIO
INNER JOIN organizacion O
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
            INNER JOIN usuario U INNER JOIN organizacion O WHERE c.IDUSUARIO = U.IDUSUARIO AND U.IDORGANIZACION = O.IDORGANIZACION AND O.IDORGANIZACION = '$IDORGANIZACION'");
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

			$stm = $this->pdo->prepare("SELECT T.IDTRABAJADOR ,T.NOMBRE, T.APELLIDO FROM trabajador T
            INNER JOIN usuario U
            INNER JOIN organizacion O
            WHERE T.IDUSUARIO = U.IDUSUARIO
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
	
	public function Listar3()
	{
		try
		{
			$IDORGANIZACION = $_SESSION['idorganizacion'];
			$result = array();

			$stm = $this->pdo->prepare("SELECT A.IDACTIVIDAD, A.NOMBRE FROM actividad A
            INNER JOIN usuario U
            INNER JOIN organizacion O
            WHERE A.IDUSUARIO = U.IDUSUARIO
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
		$sql = "INSERT INTO cultivoact (IDCULTIVO,IDACTIVIDAD,IDTRABAJADOR, IDUSUARIO) 
		        VALUES (?, ?, ?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->IDCULTIVO,
                    $data->IDACTIVIDAD,
					$data->IDTRABAJADOR,
                    $data->IDUSUARIO,
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
