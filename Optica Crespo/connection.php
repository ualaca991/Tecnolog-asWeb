<?php
include 'config.php';

$conn = mysqli_connect('127.0.0.1', $user, $password, $database, 3306);

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
