<?php
$error="";
$success="";

if(isset($_POST['uname']))
{
	$uname= $_POST['uname'];
	$pass=$_POST['pass'];

    if($uname=="munaswan")
    {
        if($pass=="munaswan")
        {
            $error="";
            $success="Welcome $uname";
            header("Location: adminhome.html");
        }
        else{
            $error="Invalid Password";
            $success="";
        }

    }
    else{
        $error="Invalid username";
        $success="";
    }
}
?>

<html>
<head>
<title> Login Form </title>
	<link rel="stylesheet" type="text/css" href="admin.css">
<body>
	<div class="loginbox">
	<img src="boss.png" class="user">
	<h1>Admin Login</h1>
	<form method="POST">
		<p>Username</p>
		<input type="text" name="uname" placeholder="Enter Username" required><br><br>
		<p>Password</p>
		<input type="password" name="pass" placeholder="Enter Password" required><br><br>
		<input type="submit" name="submit" value="Login"><br><br>

		<div class="err">
			<p> <?php print ("$error"); ?> </p> 
		<p> <?php echo $success; ?> </p>
		</div>		 
	</form>
	
	</div>
</body>
</head>
</html>
