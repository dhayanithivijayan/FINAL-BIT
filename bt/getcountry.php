<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`COUNTRY`) FROM r2c1 
			WHERE COUNTRY LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['COUNTRY'];
	}


	echo json_encode($json);
?>