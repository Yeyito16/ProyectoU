<?php
include "includes/conexion.php";

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$cedula = $_POST['cedula'];

// Insertar el nuevo usuario en la tabla
$consulta = "INSERT INTO personas (nombre, apellido, telefono, cedula) VALUES ('$nombre', '$apellido', '$telefono', '$cedula')";
if ($conexion->query($consulta) === TRUE) {
    echo 'Registro agregado exitosamente';
} else {
    echo 'Error al agregar el registro: ' . $conexion->error;
}
?>