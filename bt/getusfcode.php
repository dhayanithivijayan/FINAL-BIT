<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`USF CODE [33_40]`) FROM r2c1 
			WHERE `USF CODE [33_40]` LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['USF CODE [33_40]'];
	}


	echo json_encode($json);
?>