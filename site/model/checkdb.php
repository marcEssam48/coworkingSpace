<?php
	require_once("database.php");	
	if(isset($db)) {echo "true" ; } else { echo "false" ;}

	$db->open_connection();
	$query = "insert into blog (user_id , title , structure) values (20 , 'hello', 'hello worldadsfas')";
	//$query = "select * from blog where id = 7";
	$result = $db->query($query);
	$check = 'select * from blog where user_id = 20 ';
	$resultcheck = $db->query($check);
	$checkresult = $db->fetch_array($resultcheck);
	echo $checkresult['structure'];
?>