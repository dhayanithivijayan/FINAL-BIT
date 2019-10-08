<?php

	include("database/db_conection.php");
	$query = $_GET['query'];
	$values = explode(":", $query);
	$val = trim($values[0]);
	$classicids = explode(",",trim($values[1]));
	$classicids = join("','",$classicids); 	

	$sql = "SELECT  DISTINCT(`SUPPLIER_CIRCUIT_ID_1`) FROM r2c1 
			WHERE `CLASSIC_SITE_ID` IN ('$classicids') AND  `SUPPLIER_CIRCUIT_ID_1` LIKE '%".$val."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['SUPPLIER_CIRCUIT_ID_1'];
	}


	echo json_encode($json);
?>