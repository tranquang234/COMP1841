<?php
// jokes.php
include __DIR__ . '/includes/DatabaseConnection.php';
include __DIR__ . '/includes/DatabaseFunctions.php';

// Get all jokes
$jokes = allJokes($pdo);
$totalJokes = totalJokes($pdo);

$title = 'List of Jokes';
ob_start();
?>
<h2>There are <?= $totalJokes ?> jokes in the database:</h2>

<ul>
<?php foreach ($jokes as $joke): ?>
    <li>
        <blockquote>
            <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>
        </blockquote>
        <p>
            Written by <strong><?= htmlspecialchars($joke['authorname'], ENT_QUOTES, 'UTF-8') ?></strong> 
            in category <em><?= htmlspecialchars($joke['categoryname'], ENT_QUOTES, 'UTF-8') ?></em>
            on <?= $joke['jokedate'] ?>
        </p>
        <a href="editjoke.php?id=<?= $joke['id'] ?>">Edit</a> |
        <a href="deletejoke.php?id=<?= $joke['id'] ?>">Delete</a>
    </li>
<?php endforeach; ?>
</ul>
<?php
$output = ob_get_clean();
include __DIR__ . '/templates/layout.html.php';
?>
