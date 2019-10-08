<?php

	include("database/db_conection.php");


	$sql = "SELECT  DISTINCT(`A SITE ADDRESS`) FROM r2c1 
			WHERE `A SITE ADDRESS` LIKE '%".$_GET['query']."%'
			LIMIT 10"; 
			

	$result=mysqli_query($dbcon,$sql);

	$json = [];
	while($row = mysqli_fetch_assoc($result)){
	     $json[] = $row['A SITE ADDRESS'];
	}


	echo json_encode($json);
?>