<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el correo y la contraseña del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Aquí puedes procesar los datos, como guardarlos en la base de datos
    // Por ejemplo, podrías usar una consulta preparada para insertar los datos en la base de datos

    // Mostrar el correo y la contraseña obtenidos (esto es solo para fines de demostración)
    echo "Correo Electrónico: " . $correo . "<br>";
    echo "Contraseña: " . $contrasena . "<br>";
}
?>
