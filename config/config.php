<?php
	$config['header'] = "Webinterface Setup";
	$config['applicationPath'] = "/";
	$config['database_file'] = "config/database.php";
	
	// INTRODUCTION
	$introduction = array();
	$introduction["product"] = "Webinterface";
	$introduction["productVersion"] = "1.0";
	$introduction["company"] = "Niclas";

	// SERVER REQUIREMENTS
	$requirements = array();
	$requirements["phpVersion"] = "5";
	$requirements["extensions"] = array("mysql", "pcre");

	// FILE PERMISSIONS
	// r = readable, w = writable, x = executable
	$filePermissions = array();
	$filePermissions["config/database.php"] = "rw";
	$filePermissions["tmp"] = "rw";