<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/styles2.css">
</head>

<body>
    <?php include_once "header.php" ?>
    <main class="main">
        <section class="login">
            <div class="form">
                <h1>Inicio de Sesión</h1>
                <p>Rellene con su información</p>
                <form class="form2" method="post" action="validar_login.php">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Introduzca su email">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Introduzca su contraseña">
                    <div class="buttons">
                        <a class="forget" href=""><button>¿Ha olvidado su contraseña?</button></a>
                        <a class="continue" href="index.php"><button type="submit">Continuar</button></a>
                    </div>
                </form>
            </div>
            <img class="image" src="images/FotoLogin.jpg" alt="Foto Gafas">
        </section>
        <section class="register">
            <h1>¿No tienes cuenta?</h1>
            <p>Registrate para tener acceso exclusivo</p>
            <a href="register.php"><button>Regístrate</button></a>
        </section>
    </main>
    <?php include_once "footer2.php" ?>
</body>

</html>