<?php

include "includes/conexion.php";

// Obtener el ID del usuario a eliminar
$id = $_POST['id'];

// Eliminar el usuario de la tabla
$consulta = "DELETE FROM personas WHERE id = '$id'";
if ($conexion->query($consulta) === TRUE) {
    echo 'Registro eliminado exitosamente';
} else {
    echo 'Error al eliminar el registro: ' . $conexion->error;
}
?>