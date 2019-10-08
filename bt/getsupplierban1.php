<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`SUPPLIER_BAN_1`) FROM r2c1 
			WHERE `SUPPLIER_BAN_1` LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['SUPPLIER_BAN_1'];
	}


	echo json_encode($json);
?>