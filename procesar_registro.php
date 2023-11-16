<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "editorialberlindb";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener los datos del formulario
$username = $_POST['username'];
$fullname = $_POST['nombre'];
$password = $_POST['password'];
$number = $_POST['numero'];
$address = $_POST['direccion'];
$nationality = $_POST['nacionalidad'];
$gender = $_POST['genero'];
$email = $_POST['correo'];

// Consulta para insertar los datos en la tabla
$sql = "INSERT INTO usuario (username, nombre, password, numero, direccion, nacionalidad, genero, correo) 
        VALUES ('$username', '$fullname', '$password', '$number', '$address', '$nationality', '$gender', '$email')";

if ($conexion->query($sql) === TRUE) {
    // Redireccionar al login.php después del registro exitoso
    header("Location: login.php");
    exit();
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

$conexion->close();
?>
