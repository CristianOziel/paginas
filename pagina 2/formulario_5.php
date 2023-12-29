<?php
//base de datos 
$servername = "localhost";
$username = "cristian";
$password = "123459876";
$dbname = "tutorial";

//recuperacion de variables del html
$variableA = $_POST['nombre'];
$variableB = $_POST['estudios'];

//conexion a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

//ingresando valores ala base de database
$sql = "INSERT INTO formulario_5 (nombre,estudios) values ('$variableA','$variableB')";

if (mysqli_query($conexion, $sql)) {
    // Cerrar la conexión
    mysqli_close($conexion);

    // Redirigir a otra página
    header("Location: tabla_5.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexion);
}
 ?>