
<?php
//base de datos 
$servername = "localhost";
$username = "cristian";
$password = "123459876";
$dbname = "tutorial";

//recuperacion de variables del html
$nombre = $_POST['nombre'];

//conexion a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

//ingresando valores ala base de database
$sql = "INSERT INTO formulario (nombre,valor_ingresado) values ('nombre','$nombre')";

if (mysqli_query($conexion, $sql)) {
    // Cerrar la conexión
    mysqli_close($conexion);

    // Redirigir a otra página
    header("Location: tabla.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexion);
}

 ?>
