<?php

include "connection.php";
session_start();

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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>


<body>
	<!--
<div class="wrapper">
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand">ONLINE MANAGEMENT SYSTEM</a>
	</div>
	<ul class="nav navbar-nav">
	<li><a href="project.html">HOME</a></li>
	<li><a href="books.html">BOOKS</a></li>

	<li><a href="feedback.html">FEEDBACK</a></li>
	</ul>
	<ul  class="nav navbar-nav navbar-right">
	    <li><a href="student.html"><span class="glyphicon glyphicon-log-in">LOGIN</span></a></li>
			   <li><a href="student.html"><span class="glyphicon glyphicon-log-out">LOGOUT</SPAN></a></li>
	    <li><a href="registeration.html"><span class="glyphicon glyphicon-user">SIGNUP</span></a></li>
</ul>
</div>
</nav> -->







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
					<section>
						<div class="log_img">
				    	<br><br><br><br>
				    	<div class="box1">
				    		<h1 style="text-align: center; font-size: 35px; color:white;">Indian Library System</h1><br>
				    		<h1 style="text-align: center; font-size: 20px; color:white;">User login</h1><br>


<form name="login" action="" method="post">
	<div class="login">

 <input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
 <input class="form-control" type="password" name="password" placeholder="password" required=""><br>
<input class="btn btn-primary" type="submit" name="submit" value="LOGIN" style="color: black; width:80px;height:40px"></div>


</form><br>
<p>

<a style="color:white"; href="">Forgot password?</a>&nbsp &nbsp &nbsp
Reading for the first time ? <a style="color:white"; href="registeration.html">Sign up</a>
</p>
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

			</div>
<?php
 if(isset($_POST['submit']))
 {
$res=mysqli_query($db,"SELECT * FROM `student1` WHERE username = '$_POST[username]' && password ='$_POST[password]';");

$count=mysqli_num_rows($res);

if($count==0)
{
	?>
	<script type="text/javascript">
	alert("The username and password does not exist.")
	</script>

	<?php
}
else
	{
    $_SESSION['login_user']= $_POST['username'];
		?>
<script type="text/javascript">
	window.location="project.php"
</script>
		<?php
}
 }
 ?>
</body>
</html>
