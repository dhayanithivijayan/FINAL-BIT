<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`CONTROL_REVENUE_BUNDLE_UNBUNDLE`) FROM r2c1 
			WHERE CONTROL_REVENUE_BUNDLE_UNBUNDLE LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['CONTROL_REVENUE_BUNDLE_UNBUNDLE'];
	}


	echo json_encode($json);
?>