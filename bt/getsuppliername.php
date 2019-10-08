<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`SUPPLIER_NAME`) FROM r2c1 
			WHERE `SUPPLIER_NAME` LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['SUPPLIER_NAME'];
	}


	echo json_encode($json);
?>