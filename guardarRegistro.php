<?php
    // Obtenemos la conexion a la base de datos
    include('conexion.php');

    // Obtener los datos del formulario
    $nombreCompleto = $_POST['nombreCompleto'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    // Otros datos del formulario como correo electrónico, nombre, apellidos, etc.

    // Crear una variable para almacenar la conexion
    $host = 'localhost'; // Nombre del servidor de la base de datos
    $usuario = 'root'; // Usuario de la base de datos
    $contrasena = ''; // Contraseña del usuario de la base de datos
    $base_datos = 'farmacia'; // Nombre de la base de datos a la que te conectas
    $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

    // Verificar que los campos no estén vacíos
    if (empty($nombreCompleto) || empty($correo) || empty($usuario) || empty($contrasena)) {
        echo "Por favor completa todos los campos del formulario.";
        exit; // Detener la ejecución si faltan datos
    }

    // Encriptar la contraseña
    $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);


    // Consulta preparada para insertar el nuevo registro en la base de datos
    $consulta = $conexion->query("INSERT INTO `registro` (nombreCompleto, correo, usuario, contrasena) VALUES ($nombreCompleto, $correo, $usuario, $contrasena_encriptada)");

    // Ejecutar la consulta
    if ($consulta) {
        echo "Registro exitoso. ¡Bienvenido, $usuario!";
    } else {
        echo "Error al registrar el usuario: " . $conexion->error;
    }

    // Cerrar la conexión y liberar recursos
    $consulta->close();
    $conexion->close();
?>