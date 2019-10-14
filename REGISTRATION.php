<?php

$conn=mysqli_connect('localhost' , 'root' , '' ,'project');
if(!$conn){
	echo "connection failde".mysql_error($conn);
}


if (isset($_POST['submit'])) {
	$nm=$_POST['name'];
	$uname=$_POST['username'];
	$emil=$_POST['email'];
	$add=$_POST['address'];
	$pass=$_POST['password'];

$check_sql="select * from information where username='$uname' and email='$emil'";
$check_query=mysqli_query($conn ,$check_sql );

$count=mysqli_num_rows($check_query);

if ($count>0) {
	$res['name']= "Name is already exits";
	$res_em['email']="E-MAIL is already used";
}else{


	$sql=" insert into information (name , username , email , address, password) values('$nm' , '$uname', '$emil' , '$add', '$pass') ";

	$result=mysqli_query($conn , $sql);

	if($result){
		echo "data saved";
	}else
	{
		echo "failed";
	}
}
}


?>

<html>
		<head>
				<title>Login Here</title>
				<link href="REGISTRATION.css" rel="stylesheet" type="text/css">
		</head>
		
		<body>
				

						<div class="regbox">
						<img src="pr.jpg" class="loginlogo">
								<h1>Register Here</h1>
								<form action="" method="POST">
										<p>Full Name</p>
										<input type="text" name="name" placeholder="Enter Username" , required>
										<p>User Name</p>
										<input type="text" name="username" placeholder="Enter Username" , required>
										<?php
										if (isset($res['name']))
										{ echo $res['name'];}
										?>
										<p>Email</p>
										<input type="text" name="email" placeholder="Enter Email">
										<?php
										if (isset($res_em['email']))
										{ echo $res_em['email'];}
										?>
										<p>Address</p>
										<input type="text" name="address" placeholder="Enter Address">
										<p>Password</p>
										<input type="text" name="password" placeholder="Enter Password">
										
										<a href="LOGIN.php"><input type="button" name="" value="Back"></a>
										<a href="LOGIN.php"><input type="submit" name="submit" value="Submit"></a>
								</form>

						</div>
				
		</body>
</html>
