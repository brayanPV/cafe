<?php
class Cultivo
{
    
	private $pdo;
    public $ID;
    public $nombre;
    public $area;
    public $fecha;
    public $idusuario;

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
            $idusuario = $_SESSION['idusuario'];
			$stm = $this->pdo->prepare("SELECT C.IDCULTIVO, C.NOMBRE, C.AREA, C.FECHA FROM cultivo c
            inner join usuario u
            inner join organizacion o
            where c.idusuario = '$idusuario' 
            and c.idusuario = u.idusuario
            and u.idorganizacion = o.idorganizacion");
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
			          ->prepare("SELECT * FROM cultivo WHERE idcultivo = ?");
			          

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
			            ->prepare("DELETE FROM cultivo WHERE idcultivo = ?");			          

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
			$sql = "UPDATE cultivo SET 
						nombre          = ?, 
						area        = ?
				    WHERE idcultivo = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->area,
                        $data->ID
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Cultivo $data)
	{
		try 
		{
		$sql = "INSERT INTO cultivo (nombre,area, idusuario) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->area,
                    $data->idusuario,
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
