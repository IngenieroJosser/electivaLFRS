<?php

session_start();
echo "Bienvenido"

?>
<?php

//verificar si la varible esta creada

if (!isset($_SESSION['nombre'])) {

    // redireccionar la al index
    header("location: login.php");
}



?>