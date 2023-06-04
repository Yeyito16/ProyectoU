<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $id = $_POST['id'];

    include 'includes/conexion.php';

    $consulta = "DELETE FROM personas WHERE id='$id'";

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
        $Nombre = $pepito['Nombre'];
        $Apellido = $pepito['Apellido'];
        $Telefono = $pepito['Telefono'];
        $Cedula = $pepito['Cedula'];

        echo "<h2>Eliminar registro</h2>";
        echo "<p>¿Estás seguro de que deseas eliminar el siguiente registro?</p>";
        //echo "<p>ID: $id</p>";
        echo "<p>Nombre: $Nombre</p>";
        echo "<p>Apellido: $Apellido</p>";
        echo "<p>Telefono: $Telefono</p>";
        echo "<p>Cedula: $Cedula</p>";

        echo "<form method='POST' action='delete.php'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<input type='submit' value='Eliminar'>";
        echo "</form>";
    } else {
        echo "No se pudo encontrar el registro a eliminar.";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>