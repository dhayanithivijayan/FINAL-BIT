<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`PRODUCT`) FROM r2c1 
			WHERE `PRODUCT` LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['PRODUCT'];
	}


	echo json_encode($json);
?>