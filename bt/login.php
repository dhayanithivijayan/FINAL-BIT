<?php
session_start();
include("database/db_conection.php");
ini_set('display_errors', '0');
if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}
?>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Login</title>
</head>

<style>
input[type=submit] {
  background-color: #553A99;
  color: white;
  padding: 5px 25px;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right : 1%
}

#img1 {
  display: block;
  margin-right: auto;
}

.login-panel {
     margin-top: 150px;
 }

body {
  border: 2px solid black;
  background: btcar.jpg;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: 50% 50%;
}
</style>

<body background="btcar.jpg">
 

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
					
                    <h3 style="color:#D52685;"><center>Sign In <center></h3>

                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                          <div id="bg">
								<div class="form-group"  >
									<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="pass" type="password" value="">
								</div>
                                <input type="submit" value="login" name="login" >
                            </div>
							 <center><b>Not registered?</b>&nbsp;&nbsp;<a href="registration.php">Sign Up </a></center><!--for centered text-->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass' AND is_activated=1";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('selection.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect OR your account not activated Yet.')</script>";
    }
}
?>