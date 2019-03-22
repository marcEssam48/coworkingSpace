<?php
	
	$css = '../resources/css/';
	$js = '../resources/js/';
	 
	include 'header.php';
	 // include navbar on all pages expect the one with $nonavbar variable
	if (!isset($nonavbar)) { include 'navbar.php'; }
?>