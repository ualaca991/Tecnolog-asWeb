<?php
// Iniciar sesión para manejar la redirección y los mensajes
session_start();

// Incluimos la conexión a la base de datos
include 'connection.php';

// Verificamos si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos y limpiamos los datos enviados por el formulario
    $email = trim($_POST['email']);
    $password = trim($_POST['contraseña']); // Contraseña ingresada por el usuario


    // Validamos que los campos no estén vacíos
    if (empty($email) || empty($password)) {
        echo "Por favor, rellene los campos de inicio de sesión";
    } else {
        // Preparamos la consulta para buscar el usuario en la base de datos
        $sql = "SELECT contraseña FROM usuarios WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);

        // Vinculamos el parámetro
        mysqli_stmt_bind_param($stmt, "s", $email);

        // Ejecutamos la consulta
        mysqli_stmt_execute($stmt);

        // Obtenemos el resultado
        mysqli_stmt_store_result($stmt);

        // Verificamos si el usuario existe
        if (mysqli_stmt_num_rows($stmt) > 0) {
            //Almacenamos la contraseña hasheada de la base de datos)
            mysqli_stmt_bind_result($stmt, $stored_password);  // Renombramos la variable a $stored_password
            mysqli_stmt_fetch($stmt);


            // Verificamos la contraseña con password_verify
            if ((password_verify($password, $stored_password))) {
                // Guardamos en la sesión que el usuario ha iniciado sesión
                $_SESSION['loggedin'] = true;
                // Redirigimos a la página principal (index.php)
                header("Location: index.php");
                exit();
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        } else {
            echo "Usuario o contraseña incorrectos.";
        }

        // Cerramos la consulta
        mysqli_stmt_close($stmt);
    }
} else {
    echo "Acceso no autorizado.";
}

// Cerramos la conexión a la base de datos
mysqli_close($conn);
