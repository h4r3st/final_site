<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '../..');
$dotenv->load();

$db_server = $_ENV['DB_SERVER'];
$db_user = $_ENV['DB_USER'];
$db_password = $_ENV['DB_PASSWORD'];
$db_name = $_ENV['DB_NAME'];
$conn = "";
try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_password,
        $db_name
    );
} catch (mysqli_sql_exception) {
    "<script>alert('Could not connect to the server!')</script>";
}
