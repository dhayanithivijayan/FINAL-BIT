<?php

	include("database/db_conection.php");
	$query = $_GET['query'];
	$values = explode(":", $query);
	$val = trim($values[0]);
	$groupnames = explode(",",trim($values[1]));
	$groupnames = join("','",$groupnames); 	
	
	$sql = "SELECT  DISTINCT(`ACCOUNT`) FROM r2c1 
			WHERE `GROUP_NAME` IN ('$groupnames') AND `ACCOUNT` LIKE '%".$val."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['ACCOUNT'];
	}


	echo json_encode($json);
?>