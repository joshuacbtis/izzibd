<?php
$servername = "localhost";
$database = "dbizzi";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexion invalida revise informacion: " . mysqli_connect_error());
}
echo "Conectado correctamente a bd IZZI";
$consulta = "SELECT * FROM Empleados";
$resultado = mysqli_query( $conn, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Edad</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['nombre'] . "</td><td>" . $columna['edad'] . "</td>";
	echo "</tr>";
}
echo "</table>";

//mysqli_close($conn);
?>
