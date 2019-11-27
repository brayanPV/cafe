<?php

if (isset($_POST['action'])) {
    switch($_POST['action']) {
    case 'login':
        login();
        break;
    case 'logout':
        logout();
        break;
    case 'register':
        register();
        break;    
    }
}


function login(){

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
	  header('Location: login.html');
	}

}

 function logout(){

 	session_start();
	unset ($SESSION['username']);
	session_destroy();

	header('Location: index.html');

}

function register(){

	
}

?>

