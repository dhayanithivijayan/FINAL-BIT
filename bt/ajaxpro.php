<?php

	include("database/db_conection.php");


	$sql = "SELECT user_name FROM users 
			WHERE user_name LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['user_name'];
	}


	echo json_encode($json);
?>