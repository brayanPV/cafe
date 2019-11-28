<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=madarme.co;dbname=estudiante_16", "estudiante_16", "LonWFNBfP1");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // Create prepared statement
    $sql = "INSERT INTO organizacion (nombre, nomusuario, password) VALUES (:nombre, :nomusuario, :password)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':nombre', $_REQUEST['nombre']);
    $stmt->bindParam(':nomusuario', $_REQUEST['nomusuario']);
    $stmt->bindParam(':password', $_REQUEST['password']);
    
    // Execute the prepared statement
    $stmt->execute();
    //echo "Records inserted successfully.";
    header('Location: login.html');
    
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    header('Location: register.html');
    

}
 
// Close connection
unset($pdo);


?>