<?php

	include("database/db_conection.php");
	$query = $_GET['query'];
	$values = explode(":", $query);
	$val = trim($values[0]);
	$groupnames = explode(",",trim($values[1]));
	$groupnames = join("','",$groupnames); 	
	$accounts = explode(",",trim($values[2]));
	$accounts = join("','",$accounts); 
	
	$sql = "SELECT  DISTINCT(`ACCOUNT_NUMBER`) FROM r2c1 
			WHERE `GROUP_NAME` IN ('$groupnames') AND `ACCOUNT` IN ('$accounts') AND `ACCOUNT_NUMBER` LIKE '%".$val."%'
			LIMIT 10"; 
	
	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['ACCOUNT_NUMBER'];
	}


	echo json_encode($json);
?>