<?php
require_once __DIR__ . '/includes/DatabaseConnection.php';
$title = 'Add a Joke';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $joketext = isset($_POST['joketext']) ? trim($_POST['joketext']) : '';
    if ($joketext === '') {
        $form_error = 'Please enter a joke.';
    } else {
        try {
            $sql = 'INSERT INTO jokes (joketext, jokedate) VALUES (:joketext, NOW())';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':joketext', $joketext, PDO::PARAM_STR);
            $stmt->execute();
            header('Location: jokes.php');
            exit;
        } catch (Exception $e) {
            $form_error = 'Error inserting joke: ' . $e->getMessage();
        }
    }
}
ob_start();
include __DIR__ . '/templates/addjoke.html.php';
$output = ob_get_clean();
include __DIR__ . '/templates/layout.html.php';
?>