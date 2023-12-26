<?php
$servername = "localhost";
$username = "cristian";
$password = "123459876";
$dbname = "tutorial";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta SQL para obtener todos los registros de la tabla 'datos'
$sql = "SELECT nombre,valor_ingresado  FROM formulario";
$resultado = mysqli_query($conexion, $sql);

// Mostrar los registros en una tabla
echo "<table border='1'>
        <tr>
            <th>nombre</th>
            <th>valor_ingresado</th>
        </tr>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td>" . $fila['nombre'] . "</td>
            <td>" . $fila['valor_ingresado'] . "</td>
         </tr>";
}

echo "</table>";

// Cerrar la conexión
mysqli_close($conexion);
?>




