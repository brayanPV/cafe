<?php
class Actividad
{
    
	private $pdo;
    public $ID;
    public $nombre;
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

			$stm = $this->pdo->prepare("SELECT a.IDACTIVIDAD, a.NOMBRE FROM actividad a
            INNER JOIN USUARIO U
            INNER JOIN ORGANIZACION O
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
			          ->prepare("SELECT * FROM actividad WHERE idactividad = ?");
			          

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
			            ->prepare("DELETE FROM actividad WHERE idactividad = ?");			          

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
			$sql = "UPDATE actividad SET 
						nombre          = ?
					WHERE idactividad = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Actividad $data)
	{
		try 
		{
		$sql = "INSERT INTO actividad (nombre,IDUSUARIO) 
		        VALUES (?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->idusuario,
                    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}