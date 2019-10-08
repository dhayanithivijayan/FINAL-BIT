<?php

	include("database/db_conection.php");
	$query = $_GET['query'];
	$values = explode(":", $query);
	$val = trim($values[0]);
	$countries = explode(",",trim($values[1]));
	$countries = join("','",$countries); 	
	
	$sql = "SELECT  DISTINCT(`CITY_ STATE`) FROM r2c1 
			WHERE `COUNTRY` IN ('$countries') AND `CITY_ STATE` LIKE '%".$val."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['CITY_ STATE'];
	}


	echo json_encode($json);
?>