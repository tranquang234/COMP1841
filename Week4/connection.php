<?php
// Database connection using PDO

try {
    // XAMPP local setup
    $pdo = new PDO('mysql:host=localhost;dbname=comp1841;charset=utf8mb4', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $output = 'Database connection established successfully!';
} 
catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage();
}
?>
