<?php

session_start();

include 'connection.php';

// Verificamos si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos y limpiamos los datos enviados por el formulario
    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['email']);
    $password = trim($_POST['contraseña']);
    $confirm_password = trim($_POST['conf_contraseña']);

    // Validamos que los campos no estén vacíos
    if (empty($email) || empty($password) || empty($nombre) || empty($apellidos)) {
        echo "Por favor, rellene los campos de registro";
    } else if (strlen($password) < 8) {
        echo "La contraseña tiene que tener al menos 8 caracteres";
        //validamos que la primera contraseña sea igual que la segunda
    } else if ($password !== $confirm_password) {
        echo "Las contraseñas deben coincidir";
    } else {
        //Hahseamos la contraseña antes de almacenarla en la base de datos
        $hashed_apellidos = password_hash($password, PASSWORD_DEFAULT);
        $hashed_email = password_hash($password, PASSWORD_DEFAULT);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Preparamos la consulta para ingresar el usuario en la base de datos
        $sql = "INSERT INTO crespo.usuarios (email,contraseña,nombre,apellidos) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Vinculamos los parámetros
        mysqli_stmt_bind_param($stmt, "ssss", $hashed_email, $hashed_password, $nombre, $hashed_apellidos); // "ss" indica que ambos parámetros son cadenas de texto

        // Ejecutamos la consulta
        if (mysqli_stmt_execute($stmt)) {
            header("Location: register_exitoso.php");
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conn);
        }

        // Cerramos la consulta
        mysqli_stmt_close($stmt);
    }
}
