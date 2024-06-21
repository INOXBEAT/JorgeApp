<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <!-- Enlaces a Bootstrap y otros recursos aqu�� -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>

    <form action="index.php?accion=login" method="POST" id="form-login" name="form-login">
        <h3>Iniciar Sesi&oacuten</h3>

        <label for="username">Usuario</label>
        <input type="text" placeholder="" id="username" name="username" autocomplete="off">

        <label for="password">Contrase&ntildea</label>
        <input type="password" placeholder="" id="password" name="password" autocomplete="off">

        <button type="submit">Entrar</button>
    </form>


    <!-- Enlaces a Bootstrap JS y jQuery (aseg��rate de incluirlos en tu proyecto) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>