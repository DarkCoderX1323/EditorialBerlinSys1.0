<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: menu.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (reemplaza con tus propios detalles de conexión)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "editorialberlindb";

    $conexion = new mysqli($servername, $username, $password, $dbname);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $consulta = "SELECT * FROM usuario WHERE username='$username' AND password='$password'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: menu.php");
        exit();
    } else {
        $error = "Credenciales incorrectas. Inténtalo de nuevo.";
    }

    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Editorial Berlin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <img src="https://editorialberlin.com/wp-content/uploads/2022/02/logo-berlin-1-e1629321593429-1.png" alt="Logo de Editorial Berlin" class="logo">
            <h1 class="text-center">Iniciar Sesión</h1>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <?php if (isset($error)) { echo '<p class="error">' . $error . '</p>'; } ?>
            </form>
            <p>¿No tienes una cuenta? <a href="registrar_cliente.php">¡Regístrate!</a></p>
            <p>¡Regístrate para acceder a todas nuestras funciones y productos!</p>
        </div>
    </div>
</body>
</html>

