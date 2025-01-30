<?php

require __DIR__ . "./../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, './../.env');
$dotenv->load();

$hostname = $_ENV['HOST_NAME'];
$database = $_ENV['DATABASE_NAME'];
$username = $_ENV['USER_NAME'];
$password = $_ENV['PASSWORD'];

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>