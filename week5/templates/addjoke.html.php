<h1>Add a new joke</h1>
<?php if (!empty($form_error)): ?><p class="error"><?php echo htmlspecialchars($form_error); ?></p><?php endif; ?>
<form method="post" action="addjoke.php">
<label for="joketext">Joke text</label><br>
<textarea id="joketext" name="joketext" rows="6" cols="80" required><?php echo isset($_POST['joketext']) ? htmlspecialchars($_POST['joketext']) : ''; ?></textarea><br>
<button type="submit">Add joke</button>
<a href="jokes.php">Cancel</a>
</form>