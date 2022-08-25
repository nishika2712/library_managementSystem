<?php

include "connection.php";

 ?>



<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Online library Management System</title>
	<link rel="stylesheet" type="text/css" href="project.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
</head>
<style type="text/css"></style>
<body>
	<header style="height:90px;">
		<div class="logo">

		<h1 style="color:white; font-size:25px; word-spacing:10px; line-height:80px;margin-top:20px;">ONLINE MANAGEMENT SYSTEM</h1>
	</div>
	<nav>
<ul>
<li><a href="project.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="student.php">STUDENT-LOGIN</a></li>
<li><a href="registeration.php">SIGNUP</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>


		</nav>

	</header>
				    </nav>
				     <section>

<div class="reg_img">
	<br><br><br><br>
				    	<div class="box2">
				    		<h1 style="text-align: center; font-size: 35px; color:white;">Indian Library System</h1><br>
				    		<h1 style="text-align: center; font-size: 20px; color:white;">Registeration form</h1><br><br>


<form name="registeration" action="" method="post">
	<div class="login">
<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
<input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>

 <input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
 <input class="form-control" type="password" name="password" placeholder="password" required=""><br>
<input class="form-control" type="text" name="roll" placeholder="roll no" required=""><br>
 <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
 <input class="form-control" type="text" name="contact" placeholder="phone no" required=""><br>
<input class="btn btn-primary" type="submit" name="submit" value="SIGNUP" style="color: black; width:80px;height:40px"></div>


</form><br>

</div>


						</div>


					</section>
		    <footer>
				    	<br><br>
				    	<p style="text-align: center;">
Email:  online.library@gmail.com<br>
contact:  +011-22987709

				    	</p>

				    </footer>
						<?php
if(isset($_POST['submit']))
{
$count=0;
$sql="SELECT username from student1";
$res=mysqli_query($db,$sql);

while($row=mysqli_fetch_assoc($res))
{
if($row['username']==$_POST['username'])
{
	$count=$count+1;
}
}
if($count==0)
{
	mysqli_query($db,"INSERT INTO `STUDENT1` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[roll]', '$_POST[email]', '$_POST[contact]');");
	 ?>
<script type="text/javascript">
alert("registeration successful")
</script>
<?php
}

	else {

 ?>
 <script type="text/javascript">
 alert("The username already exist")
 </script>
 <?php
}
}
