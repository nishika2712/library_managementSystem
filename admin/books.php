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
  <header style="height:90px;">
    <div class="logo">

    <h1 style="color:white; font-size:25px; word-spacing:10px; line-height:80px;margin-top:20px;">ONLINE MANAGEMENT SYSTEM</h1>
  </div>
  <nav>
  <ul>
  <li><a href="project.php">HOME</a></li>
  <li><a href="books.php">BOOKS</a></li>
  <li><a href="admin.php">ADMIN-LOGIN</a></li>
  <li><a href="registeration.php">SIGNUP</a></li>
  <li><a href="feedback.php">FEEDBACK</a></li>
  </ul>


    </nav>

  </header>

<!--    -->

					<section>

					<div class="bok_img">
              	<br><br>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>

            body {
              font-family: "Lato", sans-serif;
            }

            .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
            }

            .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 25px;
              color: #818181;
              display: block;
              transition: 0.3s;
            }

            .sidenav a:hover {
              color: #f1f1f1;
            }

            .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
            }

            @media screen and (max-height: 450px) {
              .sidenav {padding-top: 15px;}
              .sidenav a {font-size: 18px;}
            }
            </style>


            <!--    -->
            <body>

            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="add.php">Add Books</a>
              <a href="Delete.php">Delete Books</a>
              <a href="#">BOOK REQUEST</a>
              <a href="issue.php">ISSUE INFORMATION</a>
            </div>
            <span style="font-size:30px;color: white;background-color: black;align:left;cursor:pointer" onclick="openNav()">&#9776; open</span>
<br><br>
            <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "300px";

              document.getElementById("main").style.marginLeft = "300px";


            }

            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>
<div class="srch">
  <form class="navbar-form" method="post" name="form1">
<div>
      <input type="text" name="search" placeholder="search books..">
      <button style="background-color:white" type="submit" name="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"> </span>
      </button><br><Br>
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



</body>
</html>
