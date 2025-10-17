<h1>Jokes</h1>
<?php if (!empty($error)): ?><p class="error"><?php echo htmlspecialchars($error); ?></p><?php endif; ?>
<?php if (empty($jokes)): ?><p>No jokes found. <a href="addjoke.php">Add a joke</a>.</p>
<?php else: ?>
<?php foreach ($jokes as $joke): ?>
<div class="joke">
<div class="meta">ID: <?php echo htmlspecialchars($joke['id']); ?> | Date: <?php echo htmlspecialchars($joke['jokedate']); ?></div>
<div class="text"><?php echo nl2br(htmlspecialchars($joke['joketext'])); ?></div>
<form method="post" action="deletejoke.php" onsubmit="return confirm('Delete this joke?');">
<input type="hidden" name="id" value="<?php echo (int)$joke['id']; ?>">
<button type="submit">Delete</button>
</form>
</div>
<?php endforeach; ?>
<?php endif; ?>