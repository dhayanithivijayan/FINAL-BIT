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
  <title>selection page</title>
  
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

  .column
  {
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Jquery UI for single autocomplete -->
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
	<!-- CSS for multiple tags autocomplete -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
  
  
  
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body >

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
		  <!-- <a  class="btn btn-outline-success my-2 my-sm-0" id = "GFG" href="logout.php">Logout</a> -->

          </form>
        </div>
      </nav>
    </header>
<div class="container">
 <!-- <center><h2> Revenue To Cost </h2>  </center> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
		<a href="#" id="welcome" onclick="document.location=this.id+'.php';return false;" >
			<img src="https://raw.githubusercontent.com/dhayanithivijayan/bt-1/master/login/bootstrap-3.2.0-dist/images/r2c.jpg" alt="New york" style="width:100%;" width="1920"  height="1080">
		</a>		
      </div>
	  
	   <div class="item ">
	 
		<a href="#" id="summary" onclick="document.location=this.id+'.php';return false;" >
			<img src="https://source.unsplash.com/bF2vsubyHcQ/1920x1080" alt="New york" style="width:100%;">			
		</a>		
      </div>
    
      <div class="item">
		<a href="#" id="query" onclick="document.location=this.id+'.php';return false;" >
			<img src="https://source.unsplash.com/LAaSoL0LrYs/1920x1080" alt="New york" style="width:100%;">			
		</a>	
       
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  
<br/>  
  	
              <div class="col-md-6 mb-3">
				  <a class="btn btn-primary btn-lg btn-block" style="background-color:#e60050;border:#6200AC;"  href="summary.php">Summary </a>
              </div>
              <div class="col-md-6 mb-3">
					<a class="btn btn-primary btn-lg btn-block" style="background-color:#6200AC;border:#6200AC;" href="welcome.php"> Selection </a>
              </div>
            
</div>

</body>
</html>
