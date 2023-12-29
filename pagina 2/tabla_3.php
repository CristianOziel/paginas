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
$sql = "SELECT nombre,mail,comentarios  FROM formulario_3";
$resultado = mysqli_query($conexion, $sql);

// Mostrar los registros en una tabla
echo "<table border='1'>
        <tr>
            <th>nombre</th>
            <th>valor_ingresado</th>
            
        </tr>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td>nombre</td>
            <td>" . $fila['nombre'] . "</td>
         </tr>
         <tr>
         <td>mail</td>
         <td>" . $fila['mail'] . "</td>
         </tr>
         <tr>
         <td>comentarios</td>
         <td>" . $fila['comentarios'] . "</td>
         </tr>";
}

echo "</table>";

// Cerrar la conexión
mysqli_close($conexion);
?>