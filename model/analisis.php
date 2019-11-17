<?php
class Analisis
{
    
	private $pdo;
    public $ID;
    public $IDCULTIVO;
    public $PROPIEDAD1;
    public $PROPIEDAD2;
	public $PROPIEDAD3;
	public $PROPIEDAD4;
	public $FECHA;
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

			$stm = $this->pdo->prepare("SELECT A.IDANALISIS, A.IDCULTIVO, C.NOMBRE AS NOMBRECULTIVO, A.PROPIEDAD1, A.PROPIEDAD2, A.PROPIEDAD3, A.PROPIEDAD4, A.FECHA
FROM ANALISIS A
INNER JOIN CULTIVO C
INNER JOIN USUARIO U
INNER JOIN ORGANIZACION O
ON A.IDCULTIVO = C.IDCULTIVO
AND A.IDUSUARIO = U.IDUSUARIO
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
            $IDORGANIZACION = $_SESSION['idorganizacion'];
			$result = array();

			$stm = $this->pdo->prepare("SELECT C.IDCULTIVO, C.NOMBRE FROM CULTIVO C INNER JOIN USUARIO U INNER JOIN ORGANIZACION O WHERE C.IDUSUARIO = U.IDUSUARIO AND U.IDORGANIZACION = O.IDORGANIZACION AND O.IDORGANIZACION = '$IDORGANIZACION'");
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
			          ->prepare("SELECT * FROM analisis WHERE idanalisis = ?");
			          

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
			            ->prepare("DELETE FROM analisis WHERE idanalisis = ?");			          

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
			$sql = "UPDATE analisis SET 
						PROPIEDAD1          = ?, 
						PROPIEDAD2        = ?,
						PROPIEDAD3		= ?,
						PROPIEDAD4		= ?,
				    WHERE idanalisis = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->PROPIEDAD1, 
                        $data->PROPIEDAD2,
						$data->PROPIEDAD3,
						$data->PROPIEDAD4,
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Analisis $data)
	{
		try 
		{
		$sql = "INSERT INTO analisis (IDCULTIVO,PROPIEDAD1,PROPIEDAD2,PROPIEDAD3,PROPIEDAD4, IDUSUARIO) 
		        VALUES (?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->IDCULTIVO,
					$data->PROPIEDAD1,
					$data->PROPIEDAD2,
					$data->PROPIEDAD3,
					$data->PROPIEDAD4,
                    $data->IDUSUARIO,
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
