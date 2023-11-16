<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Cliente - Editorial Berlin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos */
    </style>
    <script>
        function confirmarCerrarSesion() {
            if (confirm("¿Estás seguro de que quieres cerrar la sesión?")) {
                window.location.href = "cerrar_sesion.php"; // Redirigir al archivo de cerrar sesión
            }
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Contenido de la Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="confirmarCerrarSesion()">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <!-- Lógica PHP para obtener y mostrar los datos del cliente -->
            <?php
            session_start(); // Iniciar sesión

            // Verificar si hay una sesión de usuario activa
            if(isset($_SESSION['username'])) {
                $username = $_SESSION['username']; // Obtener el nombre de usuario de la sesión

                // Aquí deberías realizar una consulta a la base de datos para obtener los datos del cliente según el nombre de usuario

                // Ejemplo:
                // $query = "SELECT * FROM usuario WHERE username = '$username'";
                // Ejecutar la consulta y obtener los datos del cliente

                // Mostrar los datos del cliente obtenidos de la base de datos
                // Estos datos deben ser reemplazados por los obtenidos de tu consulta a la base de datos
                $nombreCliente = "Nombre de ejemplo";
                $numeroCliente = "Número de ejemplo";
                $direccionCliente = "Dirección de ejemplo";
                // ...otros datos del cliente

                // Mostrar la información del cliente
                echo '<div class="col-md-9">';
                echo '<h2>Detalle del Cliente</h2>';
                echo '<p>Nombre de usuario: <strong>' . $username . '</strong></p>';
                echo '<p>Nombre: <strong>' . $nombreCliente . '</strong></p>';
                echo '<p>Número: <strong>' . $numeroCliente . '</strong></p>';
                echo '<p>Dirección: <strong>' . $direccionCliente . '</strong></p>';
                // Mostrar otros datos del cliente según la estructura de tu base de datos
                echo '</div>';
            } else {
                // Si no hay sesión activa, redirigir al usuario al login
                header("Location: login.php");
                exit();
            }
            ?>
        </div>
    </div>
</body>
</html>
