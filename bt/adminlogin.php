<?php
session_start();//session starts here
?>
<html>
<body background="bt2.jpg">
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
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
          background-position: 39% 39%;
        }
</style>

<body>
  
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
					
                    <h3 style="color:#D52685;"><center><b>Admin Login</b><center></h3>

                <div class="panel-body">
                    <form role="form" method="post" action="adminlogin.php">
                        <fieldset>
                          <div id="bg">
								<div class="form-group"  >
									<input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
								</div>
                                <b><input type="submit" value="login" name="admin_login" ></b>
                            </div>
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

if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($dbcon,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('viewusers.php','_self')</script>";
		 $_SESSION['name']=$admin_name;//here session is used and value of $user_email store in $_SESSION.
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}

}

?>