<?php
// Include database connection
include_once '../con/connection.php';

try {
    // SQL query to select all columns
    $sql = 'SELECT * FROM joke';
    $result = $pdo->query($sql);

    // Store in array
    $jokes = $result->fetchAll();

} catch (PDOException $e) {
    $error = 'Error fetching jokes: ' . $e->getMessage();
    include 'templates/jokes.html.php';
    exit();
}

// Include template for display
include 'templates/jokes.html.php';
?>
