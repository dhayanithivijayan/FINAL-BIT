<?php

	include("database/db_conection.php");
	$query = $_GET['query'];
	$values = explode(":", $query);
	$val = trim($values[0]);
	$products = explode(",",trim($values[1]));
	$products = join("','",$products); 	


	$sql = "SELECT  DISTINCT(`SERVICE_CATEGORY`) FROM r2c1 
			WHERE `PRODUCT` IN ('$products') AND `SERVICE_CATEGORY` LIKE '%".$val."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['SERVICE_CATEGORY'];
	}


	echo json_encode($json);
?>