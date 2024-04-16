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
    $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

    // Verificar que los campos no estén vacíos
    if (empty($nombreCompleto) || empty($correo) || empty($usuario) || empty($contrasena)) {
        echo "Por favor completa todos los campos del formulario.";
        exit; // Detener la ejecución si faltan datos
    }

    // Encriptar la contraseña
    $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);


    // Consulta preparada para insertar el nuevo registro en la base de datos
    $consulta = $conexion->prepare("INSERT INTO registro (nombreCompleto, correo, usuario, contrasena) VALUES (?, ?, ?, ?)");
    $consulta->bind_param("ssss", $nombreCompleto, $correo, $usuario, $contrasena_encriptada);

    // Ejecutar la consulta
    if ($consulta->execute()) {
        echo "Registro exitoso. ¡Bienvenido, $usuario!";
    } else {
        echo "Error al registrar el usuario: " . $conexion->error;
    }

    // Cerrar la conexión y liberar recursos
    $consulta->close();
    $conexion->close();
?>