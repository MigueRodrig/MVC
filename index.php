<?php
	
	require 'helpers.php';
	if (empty($_GET['url'])){
		$_GET['url']='home';
		
		}
		controller ('menu');
		controller ($_GET['url']);
		

?>

