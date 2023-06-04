<?php

include "includes/conexion.php";
$consulta = "select Nombre,Apellido,Telefono,Cedula FROM personas";
$respuesta = mysqli_query($conexion,$consulta);

if (mysqli_num_rows($respuesta) > 0)
{
    echo "<h2> PERSONA </h2>";
    echo "<table>";
    echo "<tr> <th> Nombre </th> <th> Apellido </th> <th> Telefono </th> <th> Cedula </th> </tr>";
    while ($pepito = mysqli_fetch_assoc($respuesta)) {
        echo "<tr> ";
        echo "<td> .$pepito ['Nombre'] </td>"; 
        echo "<td> .$pepito ['Apellido'] </td>";
        echo "<td> .$pepito ['Telefono'] </td>";
        echo "<td> .$pepito ['Cedula'] </td>";
        echo "</tr>";

    }
    echo "</table>";
}else{
    echo "No se registro una base de datos"; 
}
mysqli_close($conexion);

?>