<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Telefono = $_POST['Telefono'];
    $Cedula = $_POST['Cedula'];
    include 'includes/conexion.php';
    $consulta = "UPDATE personas SET nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono', Cedula='$Cedula' WHERE id='$id'";
    
    if (mysqli_query($conexion, $consulta)) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
} else {
   
    $id = $_GET['id'];
   
    include 'includes/conexion.php';
    $consulta = "SELECT * FROM personas WHERE id='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($resultado) > 0) {
        
        $pepito = mysqli_fetch_assoc($resultado);
        $id = $pepito['id'];
        $Nombre = $pepito['Nombre'];
        $Apellido = $pepito['Apellido'];
        $Telefono = $pepito['Telefono'];
        $Cedula = $pepito['Cedula'];
       
        echo "<h2>Actualizar registro</h2>";
        echo "<form method='POST' action='update.php'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "Nombre: <input type='text' name='Nombre' value='$Nombre' required><br>";
        echo "Apellido: <input type='text' name='Apellido' value='$Apellido' required><br>";
        echo "Telefono: <input type='int' name='Telefono' value='$Telefono' required><br>";
        echo "Cedula: <input type='int' name='Cedula' value='$Cedula' required><br>";
        
        echo "<input type='submit' value='Actualizar'>";
        echo "</form>";
    } else {
        echo "No se pudo encontrar el registro a actualizar.";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>