<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $product; ?> - Setup - <?php echo $step; ?></title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="css/blueprint/plugins/buttons/screen.css" type="text/css" media="screen, projection">
	
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen, projection">
	<!--<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen, projection">-->
  </head>
  <body>
    <div class="container">
    	<div class="span-24">
    		<div class="span-17">
				<h1><?php echo $header; ?></h1>
			</div>
			<div class="span-7 last" style="text-align: right;">
				<img src="img/logo.pngö">
			</div>
		</div>
		<hr>
<div id="languages">
<a href="index.php?lang=en"><img src="images/en.png" /></a>
<a href="index.php?lang=de"><img src="images/de.png" /></a>
</div>
		<div class="span-5 colborder">
	        <h3><?php echo $lang['TITLE']; ?></h3>
	        <ol>
	        	
				<li <?php if ($step == "introduction") echo "class='current'"; ?>><?php echo $lang['step1']; ?></li>
				<li <?php if ($step == "eula") echo "class='current'"; ?>><?php echo $lang['step2']; ?></li>
				<li <?php if ($step == "gnu") echo "class='current'"; ?>><?php echo $lang['step3']; ?></li>
				<li <?php if ($step == "requirements") echo "class='current'"; ?>><?php echo $lang['step4']; ?></li>
				<li <?php if ($step == "filePermissions") echo "class='current'"; ?>><?php echo $lang['step5']; ?></li>
				<li <?php if ($step == "database") echo "class='current'"; ?>><?php echo $lang['step6']; ?></li>
				<li <?php if ($step == "importSQL") echo "class='current'"; ?>><?php echo $lang['step7']; ?></li>
				<li <?php if ($step == "done") echo "class='current'"; ?>><?php echo $lang['step8']; ?></li>
	        </ol>
		</div>
		<div class="span-18 last">