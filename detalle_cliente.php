<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Cliente - Editorial Berlin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos */
        header {
            background-color: #6767fa;
            color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo img {
            max-width: 100px;
        }

        .menu {
            list-style: none;
            display: flex;
            gap: 20px;
            margin-bottom: 0;
        }

        .menu li {
            font-size: 18px;
        }

        .menu a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
        <nav class="navbar">
            <div class="logo">
                <img link="menu.php" src="https://editorialberlin.com/wp-content/uploads/2022/02/logo-berlin-1-e1629321593429-1.png" alt="Logo de Editorial Berlin">
            </div>
            <ul class="menu">
                <li><a href="menu.php">Volver al menu</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="detalle_cliente.php">Mi cuenta</a></li>
                <li><a href="carrito_compra.php"><img src="carrito.png" alt="Carrito de compras"></a></li>
            </ul>
        </nav>
        </nav>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <!-- Icono genérico de usuario -->
                <img src="https://cdn.icon-icons.com/icons2/933/PNG/512/round-account-button-with-user-inside_icon-icons.com_72596.png" alt="Icono de Usuario" class="img-fluid">
            </div>
            <div class="col-md-9">
                <h2>Detalle del Cliente</h2>
                <?php
                session_start(); // Iniciar la sesión

                // Verificar si hay una sesión de usuario activa
                if(isset($_SESSION['username'])) {
                    $username = $_SESSION['username']; // Obtener el nombre de usuario de la sesión

                    // Aquí se debería realizar una consulta a la base de datos para obtener los datos del cliente según el nombre de usuario
                    // Reemplaza estos datos ficticios con la lógica de tu base de datos

                    // Ejemplo de consulta
                    // $query = "SELECT * FROM usuario WHERE username = '$username'";
                    // ...

                    // Datos ficticios del cliente
                    $nombreCliente = "Nombre de ejemplo";
                    $numeroCliente = "Número de ejemplo";
                    $direccionCliente = "Dirección de ejemplo";
                    // ...

                    // Mostrar los datos del cliente obtenidos de la base de datos
                    echo '<p>Nombre de usuario: <strong>' . $username . '</strong></p>';
                    echo '<p>Nombre: <strong>' . $nombreCliente . '</strong></p>';
                    echo '<p>Número: <strong>' . $numeroCliente . '</strong></p>';
                    echo '<p>Dirección: <strong>' . $direccionCliente . '</strong></p>';
                    // ...

                } else {
                    // Si no hay sesión activa, redirigir al usuario al login
                    header("Location: login.php");
                    exit();
                }
                ?>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</body>
</html>

