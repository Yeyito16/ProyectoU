<?php

if($_SERVER['REQUEST_METHOD']==='POST'){
    $Nombre=$_POST['nombre'];
    $Apellido=$_POST['apellido'];
    $Telefono=$_POST['telefono'];
    $Cedula=$_POST['cedula'];
    include "includes/conexion.php";

    $consulta = "insert INTO personas (Nombre,Apellido,Telefono,Cedula) VALUES ('$Nombre','$Apellido','$Telefono','$Cedula')";
    if(mysqli_query($conexion,$consulta)){
        header('Location: index.php');
        exit();
    }
    else{
        echo "Error: ".mysqli_error($conexion);
    }
    mysqli_close($conexion);
}

?>
<!-- HTML del formulario de creación -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear registro</title>
</head>
<body>
    <h2>Crear nuevo registro</h2>
    <form method="POST" action="create.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="telefono">Telefono:</label>
        <input type="int" id="telefono" name="telefono" required><br>

        <label for="cedula">Cedula:</label>
        <input type="int" id="cedula" name="cedula" required><br>


        <!-- Agregar más campos según la estructura de base de datos -->

        <input type="submit" value="Crear">
    </form>
</body>
</html>