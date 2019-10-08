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
    <title>query page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Jquery UI for single autocomplete -->
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
	<!-- CSS for multiple tags autocomplete -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

	 <style>
        
		.GFG {
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
    </style>


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
		   <a  class="btn btn-outline-success my-2 my-sm-0 GFG" href="logout.php">Logout</a>

          </form>
        </div>
      </nav>
    </header>
	<br/>

<style>

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
	<!-- Page starts here -->
	<div class=" containers ">
		<div class="navbars">
			<a>Query Details </a>
		</div>
        <div class="col-sm">         
			<form action="/action_page.php">
				<div class="form-group">
				  <label for="comment"><b>Place your query:</b></label>
				  <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
				</div>
				<center>
					<div class="col-md-6 mb-3">
						<a class="btn btn-primary btn-lg btn-block GFG"  href="sample.php">RUN QUERY </a>
					</div>
				</center>
			</form>
		</div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->

    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

	
  </body>
</html>
