<?php

	include("controller/config.php");
	

	$title = "My Awesome OOP Site";

	$content = <<<EOT

	<div>
    <h1>Example Domain</h1>
    <p>This domain is established to be used for illustrative examples in documents.</p>
	</div>

EOT;
	
	$site->display($content, $title);


?>