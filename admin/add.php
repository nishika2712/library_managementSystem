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




              	<br><br>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>

            body {
              background-color: #2c5802;
              height:auto;
              width: auto;
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
            .form-control{

              background-color: #080707;
              color:white;
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
<div class="container">
<h2 style="color:Orange; font-family: Lucida control;background-color:Black; text-align:center;"><b>ADD New Books</b></h2><br>
<form class="" action="" method="post">
  <input type="text" name="bid" class="form-control" placeholder="Book ID" required=""><br>
    <input type="text" name="name" class="form-control" placeholder="Book Name"required=""><br>
      <input type="text" name="authors" class="form-control" placeholder="Authors Name"required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition"required=""><br>
          <input type="text" name="status" class="form-control" placeholder="Status"required=""><br>
            <input type="text" name="quantity" class="form-control" placeholder="quantity"required=""><br>
              <input type="text" name="department" class="form-control" placeholder="Department"required=""><br>
<button class="btn btn-default" type="submit" style="color:white;background-color:black;">ADD</button>
            </form>
          </div>
          <?php
if(isset($_POST['submit']))
{

    mysqli_query($db,"INSERT INTO books VALUES('$_POST[bid]','$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]',  '$_POST[quantity]', '$_POST[department]');");
?>
<script type="text/javascript">
  alert("Books Added successfully.")
</script>
<?php
  }
  else {
    ?>
<script type="text/javascript">
  alert("You need to log in first.")
</script>

    <?php
  }


           ?>
</div>

            <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "300px";

              document.getElementById("main").style.marginLeft = "300px";


            }

            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>
          </body>
          </html>
