<h3><?php echo $lang['introduction']; ?></h3>

<p><?php echo $lang['introduction_install']; ?> <b><?php  echo $product; ?></b> (Version: <?php echo $productVersion; ?>) <?php echo $lang['introduction_dev']; ?> <b><?php echo $company; ?></b> <?php echo $lang['introduction_install_1']; ?>.</p>
<div class="control-group">
  <label class="control-label" for="selectbasic">Sprache Wählen</label>
  <div class="controls">
    <select name="topic_info" onChange="document.forms['foo'].submit()">
      <option>Deutsch</option>
      <option>English</option>
	  <option value="index.php?lang=en">B</option>
    </select>
  </div>
</div>
<script>

<!--

function FarbeVeraendern(Farbe)

{

document.getElementById('Farbbereich').style.backgroundColor = Farbe;

return true;

}

//-->

</script>
<!-- Button -->
<div class="control-group">
  <label class="control-label" for="singlebutton"></label>
  <div class="controls">
    <button id="singlebutton" name="singlebutton" class="btn btn-success">Update</button>
  </div>
</div>
<select name="Farbwaehler" onChange="FarbeVeraendern(this.options[this.selectedIndex].value);" size="1">

<option value="transparent">unsichtbar</option>

<option value="index.php?lang=en">rot</option>

<option value="lime">grün</option>

<option value="blue">blau</option>

</select>

<form method="post">
	<input type="hidden" name="nextStep" value="eula">
	<button type="submit" class="button positive">
		<img src="css/blueprint/plugins/buttons/icons/tick.png" alt=""/> <?php echo $lang['start']; ?>
	</button>
</form>
