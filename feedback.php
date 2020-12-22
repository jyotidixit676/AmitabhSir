<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amitabh Bachchan</title>
	<link rel="stylesheet" type="text/css" href="nav2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="myScript.js"></script>
	<style>
		input{
			width: 40%;
			padding: 1% 1% 1% 1%;
  			margin: 8px;
  			display: inline-block;
  			color: black;
  			border: 1px solid white;
  			box-sizing: border-box;
		}
		table{
			width: 100%;
		}
		th,td{
			padding: 12px;
		}
    </style>
</head>
<body class="bodyclr">
	<div>
		<nav class="navbar navbar-fixed-top">
			<ul class="clr">
				<li><a class="clr" href="photos_log.php">PHOTOS</a></li>
				<li><a class="clr" href="videos.php">VIDEO CLIPS</a></li>
				<li><a class="clr" href="about.php">ABOUT</a></li>
				<li><a class="clr" href="music.php">MUSIC</a></li>
				<li><a href="" class="clr active">FEEDBACK</a></li>
				<li><a class="clr" href="logout.php?logout">LOGOUT</a></li>
				<li style="float: right; font-size: 120%;">
					<?php
						session_start();
						if(isset($_SESSION['User']))
						{
							echo "Welcome ".$_SESSION['User'];
						}
						else
						{
							header("location:login.php");
						}
					?>
				</li>
			</ul>
		</nav>
	</div>
	<br><br><br>
	<center><h2 class="font">Please let us know about your experience</h2></center>
	<form action="authen_feed.php" method="POST">
		<div class="container">
			<table class="td1">
				<tr>
					<td><b>ENTER YOUR NAME</b></td>
					<td><input type="text" placeholder="Enter your name" size=55 name="name" required></td>
				</tr>
				<tr>
					<td colspan="2">
						<b>HOW DO YOU LIKE TO READ ABOUT YOUR FAVORITE TOPICS?</b>
					</td>
				</tr>
				<tr>
					<td>
						BOOKS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="topic[]" value="Books">
					</td>
					<td>
						MOBILE APPLICATIONS<input type="checkbox" name="topic[]" value="Phone apps"><br>
					</td>
				</tr>
				<tr>
					<td>
						MAGAZINES<input type="checkbox" name="topic[]" value="Magazines">
					</td>
					<td>
						ONLINE RESOURCES&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="topic[]" value="Online resources">
					</td>
				</tr>
				<tr>
					<td><b>SUGGESTION</b></td>
					<td><textarea style="border: 1px solid white;color: black" placeholder="Any suggestion for the portal?" cols=31 rows=4 name="suggestion" required></textarea></td>
				</tr>
			</table><br>
			<button type="submit"  class="btn font" name="submit">SUBMIT</button>
			<button type="reset"  class="btn" name="submit">RESET</button></td>
		</div>
	</form>
	<br><br><br><br>
	<div class="footer2">
        <h2><a href="#top" style="color: white">Top</a></h2>
    </div>

</body>
</html>