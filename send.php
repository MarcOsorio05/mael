<?php

include("conexion.php");

if (isset($_POST['send'])) {
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['mensaje']) >= 1 

    ){
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $mensaje = trim($_POST['mensaje']);
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje)
        VALUES ('$nombre', '$telefono', '$email', '$mensaje') ";
        $resultado = mysqli_query($conex, $consulta);

    }
}
?>