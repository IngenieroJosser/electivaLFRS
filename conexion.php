<?php
// Datos de conexión a la base de datos
$host = 'localhost'; // Nombre del servidor de la base de datos
$usuario = 'root'; // Usuario de la base de datos
$contrasena = 'DevJosser@1234567'; // Contraseña del usuario de la base de datos
$base_datos = 'farmacia'; // Nombre de la base de datos a la que te conectas

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}

// Otras operaciones con la base de datos...

// Cerrar la conexión
$conexion->close();
?>
