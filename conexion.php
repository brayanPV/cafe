<?php 
class Conexion{ 
private $host="localhost";
private $db="cafeuwu";
private $usuario="root";
private $clave="";

public function __construct() {
    $this->conexion = new mysqli( $this->host, $this->usuario, $this->clave, $this->db );		
    if ( mysqli_connect_errno() ) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $this->conexion->set_charset("utf8");
    
		return true;
		}
//Funcion para consultar 
public function query($query){
        $consulta=$this->conexion->query($query);
       	return $consulta;
    } 
 

}
?>