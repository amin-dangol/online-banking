<?php
include('data/dbconnection.php');
$msg="";

if(isset($_POST['submit']))
{
	$uname= $_POST['uname'];
	$pass=$_POST['pass'];
	$query=mysqli_query($con,"select 'Username', 'Password' from huawei where  username='$uname' && password='$pass' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      
        header('location:all.html');
    }
    else{
      $msg="Invalid Details.";
    }
  }


?>

<html>
<head>
<title> Login Form </title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="loginbox">
	<img src="user.png" class="user">
	<h1>Login Here</h1>
	<form method="POST">
		<p>Username</p>
		<input type="text" name="uname" placeholder="Enter Username" required><br><br>
		<p>Password</p>
		<input type="password" name="pass" placeholder="Enter Password" required><br><br>
		<input type="submit" name="submit" value="Login"><br><br>
		<a href="admin.php"> Admin Login</a><br>
		<a href="registration.php">New Account</a><br><br>
		<p style="font-size:16px; color:red" align="center"> 
		<?php print ("$msg");?> 
		</p>		 
	</form>
	
	</div>
</body>
</html>
