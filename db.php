<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "login_system";

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
