<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú - Editorial Berlin</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="https://editorialberlin.com/wp-content/uploads/2022/02/logo-berlin-1-e1629321593429-1.png" alt="Logo de Editorial Berlin">
            </div>
            <ul class="menu">
                <li><a href="#">Promociones</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="detalle_cliente.php">Mi cuenta</a></li>
                <li><a href="#"><img src="carrito.png" alt="Carrito de compras"></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="product-list">
            <?php
            // Conectar a la base de datos (reemplaza 'usuario', 'contraseña', 'base_de_datos' con tus propios valores)
            $mysqli = new mysqli("localhost", "root", "", "editorialberlindb");

            // Verificar la conexión a la base de datos
            if ($mysqli->connect_error) {
                die("Error de conexión a la base de datos: " . $mysqli->connect_error);
            }

            // Consulta para obtener los datos de los artículos
            $query = "SELECT id, nombre_articulo, stock, estado, descripcion, precio, imagen_url FROM articulos";
            $result = $mysqli->query($query);

            // Mostrar los resultados
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product">';
                    echo '<img src="' . $row['imagen_url'] . '" alt="' . $row['nombre_articulo'] . '">';
                    echo '<h2>' . $row['nombre_articulo'] . '</h2>';
                    echo '<p class="price">S/' . $row['precio'] . '</p>';
                    echo '<button>Comprar</button>';
                    echo '</div>';
                }
            } else {
                echo '<p>No se encontraron artículos.</p>';
            }

            // Cerrar la conexión
            $mysqli->close();
            ?>
        </section>
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>

