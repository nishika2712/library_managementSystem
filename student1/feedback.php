<?php

include "connection.php";
 ?>



<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="project.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
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
					<section>

						<div class="fed_img">

						<div class="wrapper">
<h3> If you have any suggestions or questions please comment below.</h3><br><br>
							<form style="" action="" method="post">
								<input class="form-control" type="text" name="comment" placeholder="Write something...."><br><br>
								<input class="btn btn-default" type="submit" name="submit" value="Comment" style="width:100px; height: 35px; background-color:white;">
							</form>
						</div>
							<div>
							<?php

							if(isset($_POST['submit']))
							{

								$sql="INSERT INTO `comment` VALUES('$_POST[comment]');";
								 mysqli_query($db,$sql);
							}

							 ?>

							</div>
										</div>
						<style type="text/css">
						.wrapper{
                padding: 10px;
								margin: 0px auto;
						    height: 700px;
						    width: 1500px;
								background-color: black;
								opacity: .7;
								color: white;
						    }

								.scroll{
                 width: 100%;
                height: 350px;
                overflow: auto;
								}

						</style>



					</section>
						    <footer>
				    	<br><br>
				    	<p style="text-align: center;">
Email:  online.library@gmail.com<br>
contact:  +011-22987709

				    	</p>

				    </footer>

			</div>

</body>
</html>
