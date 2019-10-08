
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Reset Password</title>
</head>
<style>
    .login-panel {
	margin-top: 150px;
	}
body {
  border: 2px solid black; 
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  background-position: 16% 16%;
}
input[type=submit] {
  background-color: #D52685;
  color: white;
  padding: 5px 25px;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right : 1%
}

</style>
<body background="register.jpg">

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
				<center>
                    <h3 class="panel-title" style="color:#553A99;"><b>Reset Password</b></h3>
				</center>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="resetpassword.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="EIN" name="ein" type="text" autofocus>
                            </div>                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>
							 <div class="form-group">
                                <input class="form-control" placeholder="Password Again" name="repass" type="password" value="">
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Reset" name="register" >

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

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['ein'];//here getting result from the post array after submitting the form.    
    $pass=$_POST['pass'];//same
	$repass=$_POST['repass'];//same


	if(empty($user_name) || $user_name=='') {  
		echo"<script>alert('Please enter the EID')</script>";
		exit();
	} else if(!is_numeric($user_name)) {
		echo"<script>alert('EID should only have numbers')</script>";
		exit();
	} else if(strlen($user_name) != 6) {
		echo"<script>alert('The EID entered was not 6 digits long')</script>";		
		exit();
	}
	if (strcmp($pass, $repass) !== 0) { 
		echo"<script>alert('Both password should be equal')</script>";		
		exit();
	} 		
	
   
	//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_name='$user_name'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
		$update_user="UPDATE `users` SET `user_pass`='$pass' WHERE user_name='$user_name'";
		if(mysqli_query($dbcon,$update_user))
		{
			echo"<script>alert('Password reset success.')</script>";
			echo"<script>window.open('login.php','_self')</script>";
		}
		
    }else {
		echo "<script>alert('EID is already not exist in our database, Please try another one!')</script>";
		exit();
		
	}
	

}

?>