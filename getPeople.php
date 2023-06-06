<?php
// Conexión a la base de datos
include "includes/conexion.php";

// Consulta para obtener los usuarios de la tabla
$consulta = "SELECT id, nombre, apellido, telefono, cedula FROM personas";
$resultado = $conexion->query($consulta);

// Mostrar los usuarios en una tabla
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo '<tr>';        
        echo '<td class="light">' . $row['nombre'] . '</td>';
        echo '<td class="dark">' . $row['apellido'] . '</td>';
        echo '<td class="light">' . $row['telefono'] . '</td>';
        echo '<td class="dark">' . $row['cedula'] . '</td>';
        echo '<td class="light actionBtnCont"><button class="btnForm actionBtn" onclick="deleteUser(' . $row['id'] . ')">Eliminar</button></td>';
        echo '<td class="dark actionBtnCont"><button class="btnForm actionBtn" onclick="updateUser(' . $row['id'] . ')">Actualizar</button> </td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="4">No se encontraron registros!</td></tr>';
}
?>