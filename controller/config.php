<?php

function __autoload($class) {
	
		include "controller/".$class.".php";
	
	}

	$site = new site;
	
	$site->addHeader("view/header.php");
	$site->addMain("view/main.php");
	$site->addFooter("view/footer.php");
	
	$page = new page;
	
?>