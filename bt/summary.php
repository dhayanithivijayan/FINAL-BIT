<?php
session_start();
include("database/db_conection.php");
ini_set('display_errors', '0');
if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Report</title>
  <link rel="icon" href="\images\BT.png">
  <title>Summary</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Jquery UI for single autocomplete -->
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
<!-- CSS for multiple tags autocomplete -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
  <!-- For export report css start here-->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <!-- For export report css end here-->

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


   <style>
	 #map-container { height: 450px }
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
  <!-- For export report js start here-->
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
  <!-- For export report js end here-->

  <style>
       #GFG {
           text-decoration: none;
           background-color: #D52685;
           color: white;
           border: #D52685;
           margin-left: 1230px;
       }
       #navbar {
           text-decoration: none;
           background-color: #6200AC;
           color: #6200AC;
           border: #D52685;
       }
       label {
		padding: 1px 1px 0 0;
		display: inline-block;
	   }

	 .navbarss {
	   overflow: hidden;
	   background-color: #553A99;
	   text-decoration: none;
	   color: white;
	   font-family:verdana;
	 }

	 .navbarss a {
	   float: left;
	   font-size: 16px;
	   color: white;
	   text-align: center;
	   padding: 14px 16px;
	   text-decoration: none;
	 }


	
	 
	   .column
	   {
		   float: left;
		   width: 33%;
	   }  
	  th {
		text-align: left;
		background-color: #6200AC;
		color: #FFFFFF;
		text-decoration: none!important;
		text-align: left;
		padding: 8px;
		font-size: 100%;
	  }
	  table {
	  border-collapse: collapse;
	  width: 100%;
	  }
	  td {
		text-align: left;
		padding: 8px;
		font-size: 90%;
	  }
	  tr:hover {background-color:#CBE3FA;}
	  tr:nth-child(even) {background-color: #cbbdf2;}

	div.table-container {
		display: inline-block;
		position:relative;
		overflow:auto;
	  }

   </style>



  <script>
	  $(document).ready(function() {
		var table = $('#example').DataTable( {
			dom: 'Bfrtip',
			responsive: true,
			buttons: ['pageLength','copy', 'csv', 'excel', 'pdf', 'print'],
			"lengthMenu": [ 10, 20, 50, 70, 100 ],
		    "pageLength": 20,

		} );
		//new $.fn.dataTable.FixedHeader( table );

		} );
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPKE8GlEaYEzVICgnJKqQAcwU-M7PIHV4 "></script>

</head>
<body>

     <body class="bg-light">

       <header>
         <!-- Fixed navbar -->
         <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar">
           <a href="#"><img src="bootstrap-3.2.0-dist/images/BT.png" alt="Bt Logo" height="70" width="70"></a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarCollapse">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="#"></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#"></a>
               </li>
               <li class="nav-item">
                 <a class="nav-link disabled" href="#"></a>
               </li>
             </ul>
             <form class="form-inline mt-2 mt-md-0">
        <!--  <a  class="btn btn-outline-success my-2 my-sm-0" id = "GFG" href="logout.php">Logout</a> -->

             </form>
           </div>
         </nav>
       </header>
     <br/>
	<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
         <thead>
			<tr bgcolor="#FF1493">
					<th># Customers</th>
					<th># BTAs</th>
					<th># Site Ids</th>
					<th># Circuits 1</th>
					<th># Circuits 2</th>
					<th>Total Revenue</th>
					<th>Total Cost</th>
					<th>Margin</th>
					<th>Margin %</th>
					<th>USF Recovered</th>
					<th>USF Paid</th>
					<th>USF Margin</th>  
			</tr>
		</thead>
        <tbody>
			
				<?php 
				$query = "SELECT  `PRODUCT`, `SERVICE_CATEGORY` , COUNT(`ACCOUNT_NUMBER`) AS btas,COUNT(`CLASSIC_SITE_ID`) AS siteids,COUNT(`SUPPLIER_CIRCUIT_ID_1`) AS circuit1,COUNT(`SUPPLIER_CIRCUIT_ID_2`) AS circuit2, SUM(`REVENUE_DERIVED_CHARGE_USD`) AS totalrevenue ,SUM(`ACTUAL_SUPPLIER_COST_USD`) AS totalcost ,SUM(`REVENUE_DERIVED_RECOVERY_USF`) AS usfrecovered ,SUM(`COST_DERIVED_CHARGE_USF`) AS usfpaid FROM `r2c1` GROUP BY `PRODUCT` HAVING `PRODUCT`='IP Connect Global' AND `SERVICE_CATEGORY`='MPLS Access' ";
				
				$result = mysqli_query($dbcon,$query);									
				while($row=mysqli_fetch_assoc($result))//while look to fetch the result and store in a array $row.
				{ 
				 $margin =floatval($row["totalrevenue"]) -floatval($row["totalcost"]);
				 $margin_percentage = ($margin /floatval($row["totalrevenue"]))*100;
				 $usf_margin_percentage = ((floatval($row["usfrecovered"]) -floatval($row["usfpaid"]))/floatval($row["usfrecovered"]))*100;				
				?> 
				 <tr bgcolor="#00FF00">
					 <th><?php echo $row["PRODUCT"]."-".$row["SERVICE_CATEGORY"];?></th>
					 <th><?php echo $row["btas"];?></th>
					 <th><?php echo $row["siteids"];?></th>
					 <th><?php echo $row["circuit1"];?></th>
					 <th><?php echo $row["circuit2"];?></th>
					 <th><?php echo $row["totalrevenue"];?></th>
					 <th><?php echo $row["totalcost"];?></th>		 
					 <th><?php echo $margin;?></th>
					 <th><?php echo $margin_percentage;?></th>
					 <th><?php echo $row["usfrecovered"];?></th>
					 <th><?php echo $row["usfpaid"];?></th>
					 <th><?php echo $usf_margin_percentage;?></th>
				 </tr>	
				
				<?php
				}														
				?> 
		
		
				<?php 
				$query = "SELECT `GROUP_NAME` AS customers, COUNT(`ACCOUNT_NUMBER`) AS btas,COUNT(`CLASSIC_SITE_ID`) AS siteids,COUNT(`SUPPLIER_CIRCUIT_ID_1`) AS circuit1,COUNT(`SUPPLIER_CIRCUIT_ID_2`) AS circuit2, SUM(`REVENUE_DERIVED_CHARGE_USD`) AS totalrevenue ,SUM(`ACTUAL_SUPPLIER_COST_USD`) AS totalcost ,SUM(`REVENUE_DERIVED_RECOVERY_USF`) AS usfrecovered ,SUM(`COST_DERIVED_CHARGE_USF`) AS usfpaid FROM `r2c1` GROUP BY `GROUP_NAME` ORDER BY totalrevenue DESC";
				$result = mysqli_query($dbcon,$query);									
				while($row=mysqli_fetch_assoc($result))//while look to fetch the result and store in a array $row.
				{ 
				 $margin =floatval($row["totalrevenue"]) -floatval($row["totalcost"]);
				 $margin_percentage = ($margin /floatval($row["totalrevenue"]))*100;
				 $usf_margin_percentage = ((floatval($row["usfrecovered"]) -floatval($row["usfpaid"]))/floatval($row["usfrecovered"]))*100;				
				?> 
				 <tr>
					 <td><?php echo $row["customers"];?></td>
					 <td><?php echo $row["btas"];?></td>
					 <td><?php echo $row["siteids"];?></td>
					 <td><?php echo $row["circuit1"];?></td>
					 <td><?php echo $row["circuit2"];?></td>
					 <td><?php echo $row["totalrevenue"];?></td>
					 <td><?php echo $row["totalcost"];?></td>		 
					 <td><?php echo $margin;?></td>
					 <td><?php echo $margin_percentage;?></td>
					 <td><?php echo $row["usfrecovered"];?></td>
					 <td><?php echo $row["usfpaid"];?></td>
					 <td><?php echo $usf_margin_percentage;?></td>
				 </tr>	
				
				<?php
				}														
				?>    
        </tbody>
      
    </table>
</body>

</html>
