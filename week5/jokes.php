<?php
require_once __DIR__ . '/includes/DatabaseConnection.php';
$title = 'List of Jokes';
try {
    $sql = 'SELECT id, joketext, jokedate FROM jokes ORDER BY jokedate DESC';
    $stmt = $pdo->query($sql);
    $jokes = $stmt->fetchAll();
} catch (Exception $e) {
    $error = 'Error fetching jokes: ' . $e->getMessage();
    $jokes = [];
}
ob_start();
include __DIR__ . '/templates/jokes.html.php';
$output = ob_get_clean();
include __DIR__ . '/templates/layout.html.php';
?>