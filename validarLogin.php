<?php
session_start();
include("conexion.php");
$objConectar = new Conexion();
$user=$_POST["user"];
$pass=$_POST["pass"];
$q="SELECT * FROM USUARIO WHERE NOMUSUARIO='$user' AND PASSWORD='$pass'";

$res=$objConectar->query($q);

$num = $res->num_rows;

if($num > 0){

foreach ($res as $item){
    $admin = $item["ADMIN"];
    $nombre = $item["NOMBRE"];
    $idusuario = $item["IDUSUARIO"];

}
$_SESSION['admin']=$admin;
$_SESSION['nombre']=$nombre;
$_SESSION['idusuario']=$idusuario;    
header('Location: directioner.php');
}
else{
  header('Location: index.html');
}
?>

