<?php

	include("database/db_conection.php");
	$query = $_GET['query'];
	$values = explode(":", $query);
	$val = trim($values[0]);
	$citystates = explode(",",trim($values[1]));
	$citystates = join("','",$citystates); 	
	

	$sql = "SELECT  DISTINCT(`CLASSIC_SITE_ID`) FROM r2c1 
			WHERE `CITY_ STATE` IN ('$citystates') AND  `CLASSIC_SITE_ID` LIKE '%".$val."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['CLASSIC_SITE_ID'];
	}


	echo json_encode($json);
?>