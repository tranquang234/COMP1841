<?php
require_once __DIR__ . '/includes/DatabaseConnection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    if ($id > 0) {
        try {
            $sql = 'DELETE FROM jokes WHERE id = :id';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {}
    }
}
header('Location: jokes.php');
exit;
?>