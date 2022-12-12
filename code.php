<?php
// Conexión a la base de datos MySQL
$conn = mysqli_connect("localhost", "username", "password", "database");

// Consulta a la base de datos
$sql = "SELECT * FROM tabla";
$result = mysqli_query($conn, $sql);

// Crear un archivo CSV y establecer la cabecera
$csv_file = fopen('resultados.csv', 'w');
fputcsv($csv_file, array('columna1', 'columna2', 'columna3'));

// Recorrer los resultados de la consulta y escribirlos en el archivo CSV
while ($row = mysqli_fetch_assoc($result)) {
  fputcsv($csv_file, $row);
}

// Cerrar el archivo CSV
fclose($csv_file);
