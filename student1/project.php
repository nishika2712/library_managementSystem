<?php
session_start();

 ?>



<html>
<head>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Online library Management System</title>
	<link rel="stylesheet" type="text/css" href="project.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style type="text/css">

</style>
<body>
	<div class="wrapper">
					<header>
						<div class="logo">
						<img src="imagesss/123.jpg" style="width: 150px; height:100px; margin:0 auto;">
						<h4 style="color:white">ONLINE MANAGEMENT SYSTEM</h4>
					</div>

					<?php
if(isset($_SESSION['login_user']))
{ ?>

	<nav>
<ul>
<li><a href="project.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="logout.php">LOGOUT</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>
		</nav>

		<?php
}
else {
	?>
	 <nav>
<ul>
<li><a href="project.php">HOME</a></li>
<li><a href="books.php">BOOKS</a></li>
<li><a href="student.php">STUDENT-LOGIN</a></li>
<li><a href="registeration.php">SIGNUP</a></li>
<li><a href="feedback.php">FEEDBACK</a></li>
</ul>
		</nav>
<?php
 }
					 ?>

					</header>
					<section>

				    	<br><br><br>
				    	<div class="box">
				    		<h1 style="text-align: center; font-size: 35px; color:white;">Welcome to library</h1><br>
				    		<h1 style="text-align: center; font-size: 20px; color:white;">Opens 24hr</h1><br><br><br>
				    	</div>

				    </section>
				    <footer>
				    	<br>
				    	<p style="text-align: center;">

Email:  online.library@gmail.com<br>
contact:  +011-22987709

				    	</p>

				    </footer>

			</div>

</body>
</html>
