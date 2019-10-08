<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`SERVICE_PERIOD`) FROM r2c1 
			WHERE `SERVICE_PERIOD` LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['SERVICE_PERIOD'];
	}


	echo json_encode($json);
?>