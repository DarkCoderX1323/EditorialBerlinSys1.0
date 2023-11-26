<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compra - Editorial Berlin</title>
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
        <!-- Lógica de carrito de compra -->
        <section class="cart">
            <?php
            // Verificar si se ha enviado un producto para agregar al carrito
            if (isset($_GET['product_id'])) {
                $product_id = $_GET['product_id'];

                // Almacenar el producto en el carrito (usar $_SESSION o una base de datos temporal)
                // ... (lógica de agregar producto al carrito)
                echo '<p>Producto agregado al carrito.</p>';
            } else {
                echo '<p>No se ha agregado ningún producto al carrito.</p>';
            }
            ?>
        </section>
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
