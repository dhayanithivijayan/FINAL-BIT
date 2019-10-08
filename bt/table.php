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


 .containers {
   border: 1px solid black;
   margin-top: 100px;
   margin-bottom: 100px;
   margin-right: 150px;
   margin-left: 180px;
 }



   .column
   {
       float: left;
       width: 33%;
   }

   </style>









   <style>
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
        font-size: 80%;
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
				 <?php
				 $get_columns="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='db_bt' AND `TABLE_NAME`='r2c1'";//select query for viewing users.
				 //
				 
				 $run=mysqli_query($dbcon,$get_columns);//here run the sql query.
				 $i=0;
				 while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
				 { $i++;?>
					  <th><?php echo $row[0];  ?></th>
				<?php if($i==71) break;
				 }
				 ?>        
			</tr>
		</thead>
        <tbody>
            
            <?php
			 $get_column_values="SELECT `ID`, `BT_CIRCUIT_ID`, `CONTROL_REVENUE_BUNDLE_UNBUNDLE`, `CONTROL_CATEGORY _COST_REVENUE`, `GROUP_NAME`, `ACCOUNT`, `ACCOUNT_NUMBER`, `INVOICE_NUMBER`, `BILLED_TO_DATE`, `DUE_BY`, `PSN`, `BILL_STRUCTURE_1`, `BILL_STRUCTURE_2`, `BILL_STRUCTURE_3`, `BILL_STRUCTURE_4`, `BILL_STRUCTURE_5`, `BILL_STRUCTURE_6`, `BILL_STRUCTURE_7`, `BILL_STRUCTURE_8`, `BILL_STRUCTURE_9`, `BILL_STRUCTURE_10`, `COUNTRY`, `CITY_ STATE`, `A SITE ADDRESS`, `Z SITE ADDRESS`, `NODE_ID_BT_POP`, `PRODUCT`, `SERVICE_CATEGORY`, `CAPACITY_MODEL`, `CLASSIC_SITE_ID`, `INVENTORY_DESCRIPTION`, `START_DATE`, `END_DATE`, `SERVICE_PERIOD`, `INVOICE_AMOUNT`, `CURRENCY`, `FOREX_RATE`, `ITEM_PRICE_MRC`, `ITEM_PRICE_MRC_USD`, `ACTUAL_CHARGE`, `ACTUAL_CHARGE_USD`, `TAX`, `DISCOUNT`, `USF CODE [33_40]`, `USF%`, `ACTUAL_USF_CHARGE`, `ACTUAL_USF_CHARGE_USD`, `ACTUAL_SUPPLIER_COST_USD`, `REVENUE_DERIVED_CHARGE_USD`, `COST_DERIVED_CHARGE_USD`, `GROSS_MARGIN_USD`, `GROSS_MARGIN_%`, `REVENUE_DERIVED_RECOVERY_USF`, `COST_DERIVED_CHARGE_USF`, `USF_DELTA_USD`, `SUPPLIER_NAME`, `SUPPLIER_CIRCUIT_ID_1`, `SUPPLIER_CIRCUIT_ID_2`, `SUPPLIER_BAN_1`, `SUPPLIER_BAN_2`, `TAX_EXEMPT_[Y_N]`, `USF_EXEMPT_[Y_N]`, `US_TOUCHING [Y_N]`, `COMMENTS` FROM `r2c1` WHERE `ID`< 15000 ";//select query for viewing users.
			 //echo $get_column_values;
			 $run1=mysqli_query($dbcon,$get_column_values);//here run the sql query.
			 while($row=mysqli_fetch_assoc($run1))//while look to fetch the result and store in a array $row.
			 { ?>  <tr>
				  <td><?php echo $row["ID"];  ?></td>
				  <td><?php echo $row["BT_CIRCUIT_ID"];?></td>
				  <td><?php echo $row["CONTROL_REVENUE_BUNDLE_UNBUNDLE"];?></td>
				  <td><?php echo $row["CONTROL_CATEGORY _COST_REVENUE"];  ?></td>
				  <td><?php echo $row["GROUP_NAME"];  ?></td>
				  <td><?php echo $row["ACCOUNT"];  ?></td>
				  <td><?php echo $row["ACCOUNT_NUMBER"];  ?></td>
				  <td><?php echo $row["INVOICE_NUMBER"];  ?></td>
				  <td><?php echo $row["BILLED_TO_DATE"];  ?></td>
				  <td><?php echo $row["DUE_BY"];  ?></td>
				  <td><?php echo $row["PSN"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_1"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_2"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_3"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_4"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_5"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_6"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_7"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_8"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_9"];  ?></td>
				  <td><?php echo $row["BILL_STRUCTURE_10"];  ?></td>
				  <td><?php echo $row["COUNTRY"];  ?></td>
				  <td><?php echo $row["CITY_ STATE"];  ?></td>
				  <td><?php echo $row["A SITE ADDRESS"];  ?></td>
				  <td><?php echo $row["Z SITE ADDRESS"];  ?></td>
				  <td><?php echo $row["PRODUCT"];  ?></td>
				  <td><?php echo $row["SERVICE_CATEGORY"];  ?></td>
				  <td><?php echo $row["CAPACITY_MODEL"];  ?></td>
				  <td><?php echo $row["CLASSIC_SITE_ID"];  ?></td>
				  <td><?php echo $row["INVENTORY_DESCRIPTION"];  ?></td>
				  <td><?php echo $row["START_DATE"];  ?></td>
				  <td><?php echo $row["END_DATE"];  ?></td>
				  <td><?php echo $row["SERVICE_PERIOD"]; ?></td>
				  <td><?php echo $row["INVOICE_AMOUNT"]; ?></td>
				  <td><?php echo $row["SERVICE_PERIOD"]; ?></td>
				  <td><?php echo $row["CURRENCY"]; ?></td>
				  <td><?php echo $row["FOREX_RATE"]; ?></td>
				  <td><?php echo $row["ITEM_PRICE_MRC"]; ?></td>
				  <td><?php echo $row["ITEM_PRICE_MRC_USD"]; ?></td>
				  <td><?php echo $row["ACTUAL_CHARGE"]; ?></td>
				  <td><?php echo $row["ACTUAL_CHARGE_USD"]; ?></td>
				  <td><?php echo $row["TAX"]; ?></td>
				  <td><?php echo $row["DISCOUNT"]; ?></td>
				  <td><?php echo $row["USF CODE [33_40]"]; ?></td>
				  <td><?php echo $row["USF%"]; ?></td>
				  <td><?php echo $row["ACTUAL_USF_CHARGE"]; ?></td>
				  <td><?php echo $row["ACTUAL_USF_CHARGE_USD"]; ?></td>
				  <td><?php echo $row["ACTUAL_SUPPLIER_COST_USD"]; ?></td>
				  <td><?php echo $row["REVENUE_DERIVED_CHARGE_USD"]; ?></td>
				  <td><?php echo $row["COST_DERIVED_CHARGE_USD"]; ?></td>
				  <td><?php echo $row["GROSS_MARGIN_USD"]; ?></td>
				  <td><?php echo $row["GROSS_MARGIN_%"]; ?></td>
				  <td><?php echo $row["REVENUE_DERIVED_RECOVERY_USF"]; ?></td>	
				  <td><?php echo $row["COST_DERIVED_CHARGE_USF"]; ?></td>
				  <td><?php echo $row["USF_DELTA_USD"]; ?></td>
				  <td><?php echo $row["SUPPLIER_NAME"]; ?></td>
				  <td><?php echo $row["SUPPLIER_CIRCUIT_ID_1"]; ?></td>
				  <td><?php echo $row["SUPPLIER_CIRCUIT_ID_2"]; ?></td>
				  <td><?php echo $row["SUPPLIER_BAN_1"]; ?></td>
				  <td><?php echo $row["SUPPLIER_BAN_2"]; ?></td>
				  <td><?php echo $row["TAX_EXEMPT_[Y_N]"]; ?></td>
				  <td><?php echo $row["USF_EXEMPT_[Y_N]"]; ?></td>
				  <td><?php echo $row["US_TOUCHING [Y_N]"]; ?></td>
				  <td><?php echo $row["OTHER_1"]; ?></td> 
				  <td><?php echo $row["OTHER_2"]; ?></td> 
				  <td><?php echo $row["OTHER_3"]; ?></td> 
				  <td><?php echo $row["OTHER_4"]; ?></td> 
				  <td><?php echo $row["OTHER_5"]; ?></td> 
				  <td><?php echo $row["OTHER_6"]; ?></td> 
				  <td><?php echo $row["OTHER_7"]; ?></td> 
				  <td><?php echo $row["OTHER_8"]; ?></td> 
						 
				  
				  </tr>
			
			<?php
			 }
			 ?>      
        </tbody>
      
    </table>

    




</body>

</html>
