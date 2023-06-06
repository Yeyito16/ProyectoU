<?php
include "includes/conexion.php";

// Obtener los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$cedula = $_POST['cedula'];

// Actualizar el usuario en la tabla
$consulta = "UPDATE personas SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', cedula = '$cedula' WHERE id = '$id'";
if ($conexion->query($consulta) === TRUE) {
    echo 'Registro actualizado exitosamente';
} else {
    echo 'Error al actualizar el registro: ' . $conexion->error;
}
?>