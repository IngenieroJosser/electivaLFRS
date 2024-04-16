<?php
    if(isset($_POST['correo']) && isset($_POST['contrasena'])) {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        // Aquí puedes procesar el registro con los datos recibidos
        echo "Correo Electrónico: $correo<br>";
        echo "Contraseña: $contrasena";
    } else {
        echo "Error: Datos incompletos";
    }
?>
