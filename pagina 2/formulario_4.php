<?php
//base de datos 
$servername = "localhost";
$username = "cristian";
$password = "123459876";
$dbname = "tutorial";

//recuperacion de variables del html
$variableA = $_POST['nombre'];
$variableB = $_POST['java'];
$variableC = $_POST['cmasmas'];
$variableD = $_POST['c'];
$variableE = $_POST['csharp'];

//conexion a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

//ingresando valores ala base de database
$sql = "INSERT INTO formulario_4 (nombre,java,cmasmas,c,csharp) values ('$variableA','$variableB','$variableC','$variableD','$variableE')";

if (mysqli_query($conexion, $sql)) {
    // Cerrar la conexión
    mysqli_close($conexion);

    // Redirigir a otra página
    header("Location: tabla_4.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexion);
}
 ?>