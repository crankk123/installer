<h3>Importing SQL</h3>

<p>Jetzt importieren wir die benötigten Daten in die Datenbank...</p>
<hr>

<?php if (count($errors) > 0) { ?>
	<div class="error">Some errors occured while importing the SQL data!</div>
	
	<ul>
		<?php foreach ($errors as $error): ?>
			<li><?php echo $error; ?></li>
		<?php endforeach; ?>
	</ul>
<?php } else { ?>
	<div class="success">Datenimport gelungen!</div>
<?php } ?>

<hr>

<a href="index.php" class="button negative">
	<img src="css/blueprint/plugins/buttons/icons/cross.png" alt=""/> Abbrechen
</a>

<?php if (count($errors) == 0) { ?>
	<form method="post">
		<input type="hidden" name="nextStep" value="done">
		<button type="submit" class="button positive">
			<img src="css/blueprint/plugins/buttons/icons/tick.png" alt=""/> Weiter
		</button>
	</form>
<?php } else { ?>
	<form method="post">
		<input type="hidden" name="nextStep" value="importSQL">
		<button type="submit" class="button positive">
			<img src="css/blueprint/plugins/buttons/icons/tick.png" alt=""/> Erneut Versuchen
		</button>
	</form>
<?php } ?>