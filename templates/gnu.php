<h3>GNU GENERAL PUBLIC LICENSE</h3>

<div class="info"><?php echo $lang['gnu_info']; ?></div>

<textarea style="height: 300px; width: 98%;"><?php echo $gnu; ?></textarea>
<hr>

<a href="index.php" class="button negative">
	<img src="css/blueprint/plugins/buttons/icons/cross.png" alt=""/> <?php echo $lang['cancel']; ?>
</a>

<form method="post">
	<input type="hidden" name="nextStep" value="requirements">
	<button type="submit" class="button positive">
		<img src="css/blueprint/plugins/buttons/icons/tick.png" alt=""/> <?php echo $lang['gnu_accept']; ?>
	</button>
</form>