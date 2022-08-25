<?php

include "connection.php";

 ?>


<html>
<head>
  <link rel="stylesheet" type="text/css" href="project.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>books</title>

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

					<div class="bok_img">
<div class="srch">
  <form class="navbar-form" method="post" name="form1">
<div>
      <input type="text" name="search" placeholder="search books..">
      <button style="background-color:white" type="submit" name="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"> </span>
      </button>
</div>
  </form>
</div>
							<?php

							$res=mysqli_query($db,"SELECT *FROM `books`;");

							echo "<table class='table table-bordered table-hover'>";
							echo "<tr style='background-color: white; '>";
							echo"<th>";  echo"ID"; echo"</th>";
							echo"<th>";  echo"BOOK NAME"; echo"</th>";
							echo"<th>";  echo"AUTHOR"; echo"</th>";
							echo"<th>";  echo"EDITION"; echo"</th>";
							echo"<th>";  echo"STATUS"; echo"</th>";
							echo"<th>";  echo"QUANTITY"; echo"</th>";
							echo"<th>";  echo"DEPARTMENT"; echo"</th>";
							echo"</tr>";

							while($row=mysqli_fetch_assoc($res))
							{

								echo "<tr style='background-color:white; '>";
								echo"<td>";  echo $row['bid']; echo"</td>";
								echo"<td>";  echo $row['name']; echo"</td>";
								echo"<td>";  echo $row['authors']; echo"</td>";
								echo"<td>";  echo $row['edition']; echo"</td>";
								echo"<td>";  echo $row['status']; echo"</td>";
								echo"<td>";  echo $row['quantity']; echo"</td>";
								echo"<td>";  echo $row['department']; echo"</td>";
								echo"</tr>";
							}
							echo"</table>";

							 ?>


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

</body>
</html>
