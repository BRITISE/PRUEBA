<?php
session_start();
$host_db = "localhost";
$user_db = "xmd7550";
$pass_db = "XMD7550";
$db_name = "infofs";
$tbl_name = "infofs_login";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "select * from infofs_login where login_usuario = '$username' ";
		

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 
   echo "Bienvenido! " ;
    header("Location: http://localhost:8080/php/BUC01/index.php"); die(); 
   
 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>