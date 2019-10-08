<?php
session_start();
if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="\images\BT.png">
    <title>Selection page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Jquery UI for single autocomplete -->
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
	<!-- CSS for multiple tags autocomplete -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">	

	<!-- Datatable core CSS -->

   <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">
   
   <!--Multi checkbox -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
   
	 <style>
        #GFG {
            text-decoration: none;
            background-color: #D52685;
            color: white;
            border: #D52685;
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
		
		.containers {
			border: 1px solid black;
			margin-top: 100px;
			margin-bottom: 100px;
			margin-right: 150px;
			margin-left: 180px;
		}

		.column {
			float: left;
			width: 33%;
		}
		
		.navbars {
			  overflow: hidden;
			  background-color: #6200AC;
			  text-decoration: none;
			  color: white;
			  font-family:verdana;
		}

		.navbars a {
			  float: left;
			  font-size: 16px;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
		}		
		
    </style>
   
   

	<!-- Datatable core JS -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<!-- Autocomplete core JS -->
	<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<!-- Custom styles for this template -->
    <!--<link href="https://getbootstrap.com/docs/4.1/examples/checkout/form-validation.css" rel="stylesheet">-->

  </head>

  <body class="bg-light">

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="navbar">
        <a href="#"><img src="bootstrap-3.2.0-dist\images\BT.png" alt="Bt Logo" height="70" width="70"></a>
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
		   <a  class="btn btn-outline-success my-2 my-sm-0" id = "GFG" href="logout.php">Logout</a>

          </form>
        </div>
      </nav>
    </header>
	<br/>

<!-- Page starts here -->
	<div class=" containers ">
		<div class="navbars">
			<a> Selection Details </a>
		</div>
        <div class="col-sm">
			<div class="row">
				<div class="column">
				  <div class="col-sm">
					<label for="country">Control Revenue  </label>
						<input type="text" id="ControlRevenue"  name="controlrevenues" placeholder="Control Revenue" class="form-control tm-input-info"/>
					<div class="invalid-feedback">
					  Please select a valid Control Category .
					</div>
				  </div>
				</div>				
				<div class="column">
				  <div class="col-sm">
					<label for="country">Control Category  </label>
						<input type="text" id="ControlCategory"  name="controlcategories" placeholder="Control Category" class=" form-control tm-input-info"/>
					<div class="invalid-feedback">
					  Please select a valid Control Category .
					</div>
				  </div>
				</div>
				<div class="column">
				  <div class="col-sm">
					<label for="address">Group Name</label>
					<input type="text" id="GroupName"  name="groupnames" placeholder="Group Name" class="form-control tm-input-info"/>
					  <div class="invalid-feedback">
						Please enter valid group name
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					  <div class="col-sm">
						<label for="address">Account</label>
						 <input type="text" id="Account"  name="accounts" placeholder="Account" class="form-control tm-input-info"/>
						  <div class="invalid-feedback">
							Please enter Account.
						  </div>
						</div>
				</div>
				<div class="column">
					  <div class="col-sm">
						<label for="address">Account Number</label>
						<input type="text" id="AccountNumber"  name="accountnumbers" placeholder="Account Number" class="form-control tm-input-info"/>
						  <div class="invalid-feedback">
							Please enter Account Number.
						  </div>
					  </div>
				</div>
				<div class="column">
					  <div class="col-sm">
						<label for="address">Invoice Number</label>
						<input type="text" id="InvoiceNumber"  name="invoicenumbers" placeholder="Invoice Number" class="form-control tm-input-info"/>
						  <div class="invalid-feedback">
							Please enter Invoice Number.
						  </div>
					  </div>
				</div>
            </div>
			<div class="row">
				<div class="column">
					  <div class="col-sm">
						<label for="country"> Country  </label>
						<input type="text" id="Country"  name="countries" placeholder="Country" class="form-control tm-input-info"/>	
						<div class="invalid-feedback">
						  Please select a valid Country.
						</div>
					  </div>
				</div>
				<div class="column">
					<div class="col-sm">
						<label for="country">City,State </label>
						<input type="text" id="CityState"  name="citystates" placeholder="City,State" class="form-control tm-input-info"/>	
						<div class="invalid-feedback">
						  Please select a valid City,State.
						</div>
				  </div>
				</div>
				<div class="column">
					  <div class="col-sm">
						<label for="address">A Site Address</label>
						 <input type="text" id="ASiteAddress"  name="asiteaddress" placeholder="A Site Address" class="form-control tm-input-info"/>	
						  <div class="invalid-feedback">
							Please enter Site Address.
						  </div>
					  </div>
				  </div>
			</div>
			<div class="row">
				<div class="column">
					<div class="col-sm">
						<label for="address">Product</label>
						 <input type="text" id="Product"  name="product" placeholder="Product" class="form-control tm-input-info"/>	
						  <div class="invalid-feedback">
							Please enter Product.
						  </div>
					</div>
				 </div>
				<div class="column">
					  <div class="col-sm">
						<label for="address">Service Category</label>
						 <input type="text" id="ServiceCategory"  name="servicecategory" placeholder="Service Category" class="form-control tm-input-info"/>	
						  <div class="invalid-feedback">
							Please enter Service Category.
						  </div>
					  </div>
				</div>
				<div class="column">
				  <div class="col-sm">
					<label for="address">Classic Site ID</label>
					  <input type="text" id="ClassicSiteID"  name="classicsiteid" placeholder="Classic Site ID" class="form-control tm-input-info"/>	
					  <div class="invalid-feedback">
						Please enter Classic Site ID.
					  </div>
				  </div>
				</div>
            </div>
			<div class="row">
				<div class="column">
					  <div class="col-sm">
						<label for="address">Service Period</label>
						<input type="text" id="ServicePeriod"  name="serviceperiod" placeholder="Service Period" class="form-control tm-input-info"/>	
						<div class="invalid-feedback">
							Please enter Service Period.
						</div>
					  </div>
				</div>
				<div class="column">
				  <div class="col-sm">
					<label for="country">USF Code </label>
						<input type="text" id="USFCode"  name="usfcode" placeholder="USF Code" class="form-control tm-input-info"/>	
						<div class="invalid-feedback">
						  Please select a USF Code.
						</div>
				  </div>
				</div>
				 <div class="column">
						<div class="col-sm">
						  <label for="address">Supplier Name</label>
						  <input type="text" id="SupplierName"  name="suppliername" placeholder="Supplier Name" class="form-control tm-input-info"/>	
						  <div class="invalid-feedback">
							Please enter Supplier Name.
						  </div>
						</div>
				</div>
			</div>
			<div class="row">
              <div class="col-sm">
                <label for="address">Supplier Circuit ID 1</label>
				<input type="text" id="SupplierCircuitID1"  name="suppliercircuitid1" placeholder="Supplier Circuit ID 1" class="form-control tm-input-info"/>	
				  <div class="invalid-feedback">
					Please enter Supplier Circuit ID 1.
				  </div>
              </div>
              <div class="col-sm">
                 <label for="address">Supplier Circuit ID 2</label>
				<input type="text" id="SupplierCircuitID2"  name="suppliercircuitid2" placeholder="Supplier Circuit ID 2" class="form-control tm-input-info"/>	
				  <div class="invalid-feedback">
					Please enter Supplier Circuit ID 2.
				  </div>
              </div>
            </div>
			<div class="row">
              <div class="col-sm">
                <label for="address">Supplier Ban 1</label>
					<input type="text" id="SupplierBan1"  name="supplierban1" placeholder="Supplier Ban 1" class="form-control tm-input-info"/>	
				  <div class="invalid-feedback">
					Please enter Supplier Ban 1.
				  </div>
              </div>
              <div class="col-sm ui-widget">
                 <label for="Supplier Ban 2">Supplier Ban 2</label>
					<input type="text" id="SupplierBan2"  name="supplierban2" placeholder="Supplier Ban 2" class="form-control tm-input-info"/>	
				  <div class="invalid-feedback">
					Please enter Supplier Ban 2.
				  </div>
              </div>
            </div>
            <hr class="mb-4">
			<div class="row">
              <div class="col-md-6 mb-3">				
				 <button  id="runbtn" class="btn btn-primary btn-lg btn-block" style="background-color:#6200AC;border:#6200AC; type="submit"> Submit </button>
              </div>
              <div class="col-md-6 mb-3">
					 <button  id="reset" class="btn btn-primary btn-lg btn-block" style="background-color:#6200AC;border:#6200AC; type="submit">Reset </button>
              </div>
            </div>
        </div>
    </div>
<!-- Page ends here -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
	<!-- For Tag suggestion -->
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<!-- For Multiple tag javascript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<!-- For Multi checkbox -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>



	<!--
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	-->

	
	<script>
	
			
		var ControlRevenue = $("#ControlRevenue").tagsManager();
		var ControlCategory = $("#ControlCategory").tagsManager();
		var GroupName = $("#GroupName").tagsManager();		
		var Account = $("#Account").tagsManager();		
		var AccountNumber = $("#AccountNumber").tagsManager();		
		var InvoiceNumber = $("#InvoiceNumber").tagsManager();		
		var Country = $("#Country").tagsManager();	
		var CityState = $("#CityState").tagsManager();	
		var ASiteAddress = $("#ASiteAddress").tagsManager();	
		var Product = $("#Product").tagsManager();	
		var ServiceCategory = $("#ServiceCategory").tagsManager();	
		var ClassicSiteID = $("#ClassicSiteID").tagsManager();	
		var ServicePeriod = $("#ServicePeriod").tagsManager();	
		var USFCode = $("#USFCode").tagsManager();	
		var SupplierName = $("#SupplierName").tagsManager();	
		var SupplierCircuitID1 = $("#SupplierCircuitID1").tagsManager();	
		var SupplierCircuitID2 = $("#SupplierCircuitID2").tagsManager();
		var SupplierBan1 = $("#SupplierBan1").tagsManager();
		var SupplierBan2 = $("#SupplierBan2").tagsManager();
	
       $(document).ready(function() {
		   
			/* Code for multiple Tags */	
			$("#ControlRevenue").typeahead({
			  name: 'controlrevenues',
			  displayKey: 'name',
			  source: function (query, process) {
				return $.get('getrevenuecategory.php', { query: query }, function (data) {
				  data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				ControlRevenue.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#ControlRevenue").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});		 */		
			
			
			$("#ControlCategory").typeahead({
			  name: 'controlcategories',
			  displayKey: 'name',
			  source: function (query, process) {
				return $.get('getcontrolcategory.php', { query: query }, function (data) {
				  data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				ControlCategory.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#ControlCategory").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			
			
			$("#GroupName").typeahead({
			  name: 'groupnames',
			  displayKey: 'name',
			  source: function (query, process) {
				return $.get('getgroupname.php', { query: query }, function (data) {
				  data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				GroupName.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#GroupName").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});
			 */
			
			$("#Account").typeahead({
			  name: 'accounts',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getaccount.php', { query: query+':'+$("#GroupName").tagsManager('tags').toString() }, function (data) {				
				 data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				Account.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#Account").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});	 */				
			
					
			$("#AccountNumber").typeahead({
			  name: 'accountnumbers',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getaccountnumber.php', { query: query+':'+$("#GroupName").tagsManager('tags').toString()+':'+$("#Account").tagsManager('tags').toString() }, function (data) {					
				 data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				AccountNumber.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#AccountNumber").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});
			 */
			
			
			$("#InvoiceNumber").typeahead({
			  name: 'invoicenumbers',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getinvoicenumber.php', { query: query+':'+$("#GroupName").tagsManager('tags').toString()+':'+$("#Account").tagsManager('tags').toString()+':'+$("#AccountNumber").tagsManager('tags').toString() }, function (data) {					
				
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				InvoiceNumber.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#InvoiceNumber").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			
			$("#Country").typeahead({
			  name: 'countries',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getcountry.php', { query: query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				Country.tagsManager("pushTag", item);
			  }
			});	
			
		/* 	jQuery("#Country").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			
			$("#CityState").typeahead({
			  name: 'citystates',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getcitystate.php', { query:query +':'+$("#Country").tagsManager('tags').toString()}, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				CityState.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#CityState").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			$("#ASiteAddress").typeahead({
			  name: 'asiteaddress',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getasiteadress.php', { query:query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				ASiteAddress.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#ASiteAddress").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});
			 */
			$("#Product").typeahead({
			  name: 'product',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getproduct.php', { query:query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				Product.tagsManager("pushTag", item);
			  }
			});	
			
/* 			jQuery("#Product").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});
			 */
			
			$("#ServiceCategory").typeahead({
			  name: 'servicecategory',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getservicecategory.php', { query:query +':'+$("#Product").tagsManager('tags').toString() }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				ServiceCategory.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#ServiceCategory").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			$("#ClassicSiteID").typeahead({
			  name: 'classicsiteid',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getclassicsiteid.php', { query:query +':'+$("#CityState").tagsManager('tags').toString() }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				ClassicSiteID.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#ClassicSiteID").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			$("#ServicePeriod").typeahead({
			  name: 'serviceperiod',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getserviceperiod.php', { query:query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				ServicePeriod.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#ServicePeriod").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			
			$("#USFCode").typeahead({
			  name: 'usfcode',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getusfcode.php', { query:query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				USFCode.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#USFCode").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});
			 */
			
			$("#SupplierName").typeahead({
			  name: 'suppliername',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getsuppliername.php', { query:query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				SupplierName.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#SupplierName").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			
			$("#SupplierCircuitID1").typeahead({
			  name: 'suppliercircuitid1',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getsuppliercircuitid1.php', { query:query +':'+$("#ClassicSiteID").tagsManager('tags').toString() }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				SupplierCircuitID1.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#SupplierCircuitID1").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});
			 */
			
			$("#SupplierCircuitID2").typeahead({
			  name: 'suppliercircuitid2',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getsuppliercircuitid2.php', { query:query +':'+$("#ClassicSiteID").tagsManager('tags').toString() }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				SupplierCircuitID2.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#SupplierCircuitID2").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			
			$("#SupplierBan1").typeahead({
			  name: 'supplierban1',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getsupplierban1.php', { query:query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				SupplierBan1.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#SupplierBan1").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			}); */
			
			
			$("#SupplierBan2").typeahead({
			  name: 'supplierban2',
			  displayKey: 'name',
			  source: function (query, process) {				 	
				return $.get('getsupplierban2.php', { query:query }, function (data) {					
				data = $.parseJSON(data);
				  return process(data);
				});
			  },
			  afterSelect :function (item){
				SupplierBan2.tagsManager("pushTag", item);
			  }
			});	
			
			/* jQuery("#SupplierBan2").on('tm:pushing', function(e, tag) {
				alert(tag + " is almost there!");
			});	 */
			
		} );
		
		
		
		$("#runbtn").click(function() {
			
			var queryobj = {};
			queryobj.name="send";
			queryobj.CONTROL_REVENUE_BUNDLE_UNBUNDLE=$("#ControlRevenue").tagsManager('tags');
			queryobj.CONTROL_CATEGORY_COST_REVENUE=$("#ControlCategory").tagsManager('tags');
			queryobj.GROUP_NAME=$("#GroupName").tagsManager('tags');
			queryobj.ACCOUNT=$("#Account").tagsManager('tags');
			queryobj.ACCOUNT_NUMBER=$("#AccountNumber").tagsManager('tags');
			queryobj.INVOICE_NUMBER=$("#InvoiceNumber").tagsManager('tags');
			queryobj.COUNTRY=$("#Country").tagsManager('tags');
			queryobj.CITY_STATE=$("#CityState").tagsManager('tags');
			queryobj.A_SITE_ADDRESS=$("#ASiteAddress").tagsManager('tags');
			queryobj.PRODUCT=$("#Product").tagsManager('tags');
			queryobj.SERVICE_CATEGORY=$("#ServiceCategory").tagsManager('tags');
			queryobj.CLASSIC_SITE_ID=$("#ClassicSiteID").tagsManager('tags');
			queryobj.SERVICE_PERIOD=$("#ServicePeriod").tagsManager('tags');
			queryobj.USF_CODE=$("#USFCode").tagsManager('tags');
			queryobj.SUPPLIER_NAME=$("#SupplierName").tagsManager('tags');
			queryobj.SUPPLIER_CIRCUIT_ID_1=$("#SupplierCircuitID1").tagsManager('tags');
			queryobj.SUPPLIER_CIRCUIT_ID_2=$("#SupplierCircuitID2").tagsManager('tags');
			queryobj.SUPPLIER_BAN_1=$("#SupplierBan1").tagsManager('tags');
			queryobj.SUPPLIER_BAN_2=$("#SupplierBan2").tagsManager('tags');			
			$.ajax({
				type: "POST",
				url: "getreport.php",				
				data: (queryobj),				
				//contentType: "application/json; charset=utf-8",
				//dataType: "json",
				//processData: false,
				beforeSend: function() {
					
				},
				success: function(data) {
					var obj = JSON.parse(data);
					if(obj.STATUS == 1){
						window.location="report.php";
					}else {
						alert('No record Found');
					}
				
				},
				error: function(err) {
					console.log(err);
					//error message
				}
			});
			
			return;				
		
		});		
		
		
		$("#reset").click(function() {
			$("#ControlRevenue").tagsManager('empty');
			 $("#ControlCategory").tagsManager('empty');
			 $("#GroupName").tagsManager('empty');		
			 $("#Account").tagsManager('empty');		
			 $("#AccountNumber").tagsManager('empty');		
			 $("#InvoiceNumber").tagsManager('empty');		
			 $("#Country").tagsManager('empty');	
			 $("#CityState").tagsManager('empty');	
			 $("#ASiteAddress").tagsManager('empty');	
			 $("#Product").tagsManager('empty');	
			 $("#ServiceCategory").tagsManager('empty');	
			 $("#ClassicSiteID").tagsManager('empty');	
			 $("#ServicePeriod").tagsManager('empty');	
			 $("#USFCode").tagsManager('empty');	
			 $("#SupplierName").tagsManager('empty');	
			 $("#SupplierCircuitID1").tagsManager('empty');	
			 $("#SupplierCircuitID2").tagsManager('empty');
			 $("#SupplierBan1").tagsManager('empty');
			 $("#SupplierBan2").tagsManager('empty');		 
		});		
	  
	  
    </script>
  </body>
</html>







