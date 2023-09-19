<?php
// Iniciar la sesión
session_start();

// Verificar si el formulario de inicio de sesión se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (reemplaza 'usuario', 'contraseña', 'base_de_datos' con tus propios valores)
    $mysqli = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

    // Verificar la conexión a la base de datos
    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

    // Obtener las credenciales ingresadas por el usuario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta para verificar las credenciales en la tabla "usuario"
    $query = "SELECT username, password FROM usuario WHERE username = ? AND password = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    // Verificar si las credenciales son válidas
    if ($stmt->num_rows == 1) {
        // Inicio de sesión exitoso
        $_SESSION['username'] = $username;
        header("Location: menu.php");
        exit();
    } else {
        // Credenciales incorrectas, mostrar un mensaje de error
        $error_message = "Credenciales incorrectas. Inténtalo de nuevo.";
    }

    // Cerrar la conexión y liberar los recursos
    $stmt->close();
    $mysqli->close();
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
    <div class="login-container">
        <img src="logo_empresa.png" alt="Logo de Editorial Berlin" class="logo">
        <h1>Iniciar Sesión</h1>
        
        <?php
        // Mostrar un mensaje de error si las credenciales son incorrectas
        if (isset($error_message)) {
            echo "<p class='error'>$error_message</p>";
        }
        ?>
        
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
