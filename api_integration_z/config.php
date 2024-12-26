<?php
$host = 'localhost';
$dbname = 'api_integration_z';
$username = 'root'; // Default MySQL username
$password = '';     // Default MySQL password (blank)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
