<?php
// Conectar a la base de datos (cambia las credenciales según tu configuración)
$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "contactos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario de registro
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
$genero_favorito = $_POST["genero_favorito"];

// Insertar datos en la base de datos
$insertar = "INSERT INTO `usuarios`(`nombre`, `email`, `password`, `genero_favorito`) VALUES ('$nombre','$email','$password','$genero_favorito')";
if ($conexion->query($insertar) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $insertar . "<br>" . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
