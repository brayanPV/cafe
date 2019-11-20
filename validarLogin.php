<?php
session_start();
include("conexion.php");
$objConectar = new Conexion();
$user=$_POST["user"];
$pass=$_POST["pass"];
$q="SELECT * FROM usuario WHERE NOMUSUARIO='$user' AND password='$pass'";

$res=$objConectar->query($q);

$num = $res->num_rows;

if($num > 0){

foreach ($res as $item){
    $admin = $item["ADMIN"];
    $nombre = $item["NOMBRE"];
    $idusuario = $item["IDUSUARIO"];
	$idorganizacion = $item["IDORGANIZACION"];

}
$_SESSION['admin']=$admin;
$_SESSION['nombre']=$nombre;
$_SESSION['idusuario']=$idusuario;
$_SESSION['idorganizacion']=$idorganizacion;    
header('Location: directioner.php');
}
else{
  header('Location: index.html');
}
?>

