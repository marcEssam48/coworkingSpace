<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>
            <?php 
              include_once '../model/Uifunctions.php';
              $Title = new Uifunctions();
              $Title->getTitle();
            ?>
        </title>
		<link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $css; ?>font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo $css; ?>backend.css" />
	</head>
	<body>
