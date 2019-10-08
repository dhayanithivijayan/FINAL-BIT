<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`CONTROL_CATEGORY _COST_REVENUE`)  FROM r2c1 
			WHERE `CONTROL_CATEGORY _COST_REVENUE` LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['CONTROL_CATEGORY _COST_REVENUE'];
	}


	echo json_encode($json);
?>