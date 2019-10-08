
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>Registration</title>
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
                    <h3 class="panel-title" style="color:#553A99;"><b>Registration</b></h3>
				</center>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="EIN" name="ein" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <!--<div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>-->

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Request To Access" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php
ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "dhayanithivijay@gmail.com");
include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['ein'];//here getting result from the post array after submitting the form.
    //$user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


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
	if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
		echo"<script>alert(' Invalid email address')</script>";		
		exit();
	}   
   
	//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_name='$user_name'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
		echo "<script>alert('EID is already exist in our database, Please try another one!')</script>";
		exit();
    }
	//insert the user into the database.
    $insert_user="insert into users (user_name,user_email) VALUE ('$user_name','$user_email')";
	
    if(mysqli_query($dbcon,$insert_user))
    {
		echo"<script>window.open('thankyou.php','_self')</script>";
		/*
		$to = "dhayanithi.vijayan@iopex.com,dhayanithivijay@gmail.com";
		$subject = "Access request activation";
		$message = "
		<html>
		<head>
		<title>Access request activation</title>
		</head>
		<body>
		<p>The user details:</p>
		<table>
		<tr>
		<th>EID</th>
		<th>Email ID</th>
		</tr>
		<tr>
		<td>".$user_name."</td>
		<td>".$user_email."</td>
		</tr>
		</table>
		</body>
		</html>
		";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headers .= 'From: <webmaster@gmail.com>' . "\r\n";
		$headers .= 'Cc: dhayanithivijay@gmail.com' . "\r\n";
		
		if (mail($to,$subject,$message,$headers))
		{
			echo"<script>window.open('thankyou.php','_self')</script>";
		}
		else
		{
			echo "Error: Message not accepted";
		}*/
		
	   
    }

}

?>