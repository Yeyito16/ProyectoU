<?php

include "includes/conexion.php";

if ($conexion) {

    $consulta = "select id,Nombre,Apellido,Telefono,Cedula FROM personas";
    $respuesta = mysqli_query($conexion,$consulta);
    if (mysqli_num_rows($respuesta) > 0)
    {
    echo "<h2> PERSONA </h2>";
    echo "<table>";
    echo "<tr> <th> Id </th> <th> Nombre </th> <th> Apellido </th> <th> Telefono </th> <th> Cedula </th> </tr>";
    while ($pepito = mysqli_fetch_assoc($respuesta)) {
        echo "<tr>";
        echo "<td>".$pepito['id']."</td>";
        echo "<td> ".$pepito['Nombre']."</td>"; 
        echo "<td>".$pepito['Apellido']."</td>";
        echo "<td>".$pepito['Telefono']."</td>";
        echo "<td>".$pepito['Cedula']."</td>";
        echo "<td>";
            echo "<a href='update.php?id=".$pepito['id']."'>Actualizar</a>";
            echo " | ";
            echo "<a href='delete.php?id=".$pepito['id']."'>Eliminar</a>";
            echo "</td>";
            echo "</tr>";
        echo "</tr>";

    }
    echo "</table>";
    }else{
    echo "No se encontraron registros";
}
mysqli_close($conexion);
}else{ 
    echo "No se registro una base de datos"; 
}

?>
<a href="create.php">Crear nuevo registro</a>