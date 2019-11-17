<?php
class Usuario
{
    
	private $pdo;
    public $ID;
    public $nombre;
    public $apellido;
    public $nomusuario;
    public $password;
    public $ORGANIZACION;
    

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

			$stm = $this->pdo->prepare("SELECT U.IDUSUARIO, U.NOMBRE, U.APELLIDO, U.NOMUSUARIO FROM usuario U
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
			          ->prepare("SELECT * FROM usuario WHERE idusuario = ?");
			          

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
			            ->prepare("DELETE FROM usuario WHERE idusuario = ?");			          

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
			$sql = "UPDATE usuario SET 
						nombre          = ?, 
						apellido        = ?,
						nomusuario 		= ?,
                        password        = ?
				    WHERE idusuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->apellido,
						$data->nomusuario,
                        $data->password,
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (nombre,apellido,nomusuario, password,admin, IDORGANIZACION) 
		        VALUES (?, ?, ?, ?,0,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->apellido,
					$data->nomusuario,
                    $data->password,
                    $data->idorganizacion
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
