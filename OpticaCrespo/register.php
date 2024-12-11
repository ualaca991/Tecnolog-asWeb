<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/styles3.css">
</head>

<body>
    <?php include_once "header.php" ?>
    <main class="main">
        <section class="register">
            <div class="form">
                <h1>Formulario de Registro</h1>
                <p>Rellene sus datos en el formuario</p>
                <form class="form2" method="post" action="registro_usuario.php">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Introduzca su nombre">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Introduzca sus apellidos">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Introduzca su email">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Cree su contraseña">
                    <label for="conf_contraseña">Confirmar Contraseña</label>
                    <input type="password" name="conf_contraseña" id="conf_contraseña" placeholder="Confirme su contraseña">
                    <div class="buttons">
                        <a class="create" href=""><button type="submit">Crear cuenta</button></a>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php include_once "footer2.php" ?>
</body>

</html>