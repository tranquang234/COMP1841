<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? htmlspecialchars($title) : 'Jokes'; ?></title>
    <link rel="stylesheet" href="jokes.css">
</head>
<body>
<header>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="jokes.php">List jokes</a></li>
<li><a href="addjoke.php">Add joke</a></li>
</ul>
</nav>
</header>
<main class="container">
<?php echo isset($output) ? $output : ''; ?>
</main>
</body>
</html>