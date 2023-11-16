<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente - Editorial Berlin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos del formulario */
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-container">
            <h1 class="text-center">Registrar Cliente</h1>
            <form action="procesar_registro.php" method="POST">
                <div class="form-group">
                    <label for="username">Nombre de Usuario:</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="fullname">Nombre:</label>
                    <input type="text" id="fullname" name="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="number">Número:</label>
                    <input type="text" id="number" name="numero" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Dirección:</label>
                    <input type="text" id="address" name="direccion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nationality">Nacionalidad:</label>
                    <input type="text" id="nationality" name="nacionalidad" class="form-control">
                </div>
                <div class="form-group">
                    <label for="gender">Género:</label>
                    <select id="gender" name="genero" class="form-control">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="correo" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>
