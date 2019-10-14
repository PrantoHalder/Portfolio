<?php
$con=mysqli_connect("localhost" ,"root", "" ,"university_application");

if (isset($_POST['submit'])) {

	$uemail=$_POST['Email'];
	$pas=$_POST['Password'];




	$sql="select * from information where username='$uemail' and Password='$pas'";

	$res=mysqli_query($con , $sql);
	$count=mysqli_num_rows($res);
	echo $count;

	if ($count) {
		header('location:home.php');
	}else
	{
		echo "Please enter a vaild data";
	}
}


?>

<!DOCTYPE html> 
 <html>
  <head> 
   <title>
     SHOVON HOME PAGE
   </title>
   <link rel="stylesheet" type="text/css" href="home.css">
      </link>
	  <link href='http://fonts.googleapis.com/css?family=montserrat:400,700%7CPT+serif:400,700,400 italic'> 
	  </link>
	  <link href="https://fonts.googleapis.com/css?family=mont[open+sans" rel="stylesheet">
	  </link>
  </head>
  <body>
     <div class="backgroungimage">
	 <div class="menu">
	 <div class="leftmenu">
	 <h4>SHOVON</h4>
	 </div>
	 <div class="rightmenu">
	 <ul>
	 <a href="home.html"><li id="first">HOME</li></a> 
     <a href="about.html"><li>ABOUT</li></a> 
	 <a href ="work.html"><li>WORK</li></a> 
	 <a href="contact.html"><li>CONTACT</li></a>
	 <a href="shills.html"><li>Skills</li></a>
	 </ul>
	 </div>
	 </div>
	 <div class="text">
	
	
	 <h4>DESIGN | DEVELOPMENT | BRANDING </h4>
	 <h1>CREATIVE & EXPERIENCED</h1>
	 <h3>Work hard | Stay humble | Spread happiness | Make things happen|&Never stop learning  | BG: B+(ve)</h3>
	 <button id="b1">Like & Share</button>
	 <button id="b2">Subscribe</button><br>
	 <a href="www.facebook.com"><img src="pr-5.png" alt="facebook" height="40px" width="40px"></img></a>
	   <a href="www.whatsapp.com"><img src="pr-6.jpg" alt="facebook" height="40px" width="40px"></img></a>
	    <a href="www.gmail.com"><img src="pr-7.jpg" alt="facebook" height="40px" width="40px"></img></a>
	 </div>
	 </div>
  </body>
 </html>