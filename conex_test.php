<?php
session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'mi primer base de datos'
);
if (isset($conn)){
    echo "<h1>CONEXIÓN EXITOSA<h1/>";
}
?>