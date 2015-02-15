<h3><?php echo $lang['introduction']; ?></h3>

<p><?php echo $lang['introduction_install']; ?> <b><?php  echo $product; ?></b> (Version: <?php echo $productVersion; ?>) <?php echo $lang['introduction_dev']; ?> <b><?php echo $company; ?></b> <?php echo $lang['introduction_install_1']; ?>.</p>




<form method="post">
	<input type="hidden" name="nextStep" value="eula">
	<button type="submit" class="button positive">
		<img src="css/blueprint/plugins/buttons/icons/tick.png" alt=""/> <?php echo $lang['start']; ?>
	</button>
</form>
