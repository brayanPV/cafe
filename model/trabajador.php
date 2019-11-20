<?php
class Trabajador
{
    
	private $pdo;
    public $ID;
    public $nombre;
    public $apellido;
    public $telefono;
    public $cedula;
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

			$stm = $this->pdo->prepare("SELECT T.IDTRABAJADOR, T.NOMBRE,T.APELLIDO,T.TELEFONO FROM trabajador T
            INNER JOIN usuario U
            ON T.IDUSUARIO = U.IDUSUARIO
            INNER JOIN organizacion O
            ON U.IDORGANIZACION =O.IDORGANIZACION
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

			$stm = $this->pdo->prepare("SELECT * FROM cultivo");
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

	public function Registrar(Trabajador $data)
	{
		try 
		{
		$sql = "INSERT INTO trabajador (nombre,apellido,telefono,cedula,idusuario) 
		        VALUES (?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->apellido,
					$data->telefono,
                    $data->cedula,
                    $data->idusuario
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
