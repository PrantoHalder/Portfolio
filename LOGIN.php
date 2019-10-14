<?php
$con=mysqli_connect("localhost" ,"root", "" ,"project");

if (isset($_POST['submit'])) {

	$uname=$_POST['username'];
	$pas=$_POST['password'];




	$sql="select * from information where username='$uname' and password='$pas'";

	$res=mysqli_query($con , $sql);
	$count=mysqli_num_rows($res);
	echo $count;

	if ($count) {
		header('location:HOME.php');
	}else
	{
		echo "failed";
	}
}


?>

<html>
		<head>
				<title>Login Here</title>
				<link href="LOGIN.css" rel="stylesheet" type="text/css">
		</head>
		
		<body>
				

						<div class="loginbox">
						<img src="pr.jpg" class="loginlogo">
								<h1>Login Here</h1>
								<form action="" method="POST">
										<p>Username</p>
										<input type="text" name="username" placeholder="Enter Username">
										<p>Password</p>
										<input type="text" name="password" placeholder="Enter Password">
										<a href="home(2).php"><input type="submit" name="submit" value="Login"></a>
										<a href="#">Forgot Password?</a><br>
										<a href="REGISTRATION.php">Don't Have an Account?</a>
								</form>

						</div>
				
		</body>
</html>
