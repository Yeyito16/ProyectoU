<?php
$conexion=mysqli_connect("localhost:3306","root","","Ciudadano");

// Verificar la conexión
if ($conexion->connect_error) {
    die('Error de conexión a la base de datos: ' .$conexion->connect_error);
}
?>