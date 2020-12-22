<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amitabh Bachchan</title>
	<link rel="stylesheet" type="text/css" href="nav2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class="bodyclr">
	<div>
		<nav class="navbar navbar-fixed-top">
			<ul class="clr">
				<li><a class="clr" href="photos_log.php">PHOTOS</a></li>
				<li><a class="clr" href="videos.php" target="_self">VIDEO CLIPS</a></li>
				<li><a class="clr" href="about.php">ABOUT</a></li>
				<li><a href="" class="clr active">MUSIC</a></li>
				<li><a class="clr" href="feedback.php">FEEDBACK</a></li>
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
	<br><br><br><br><br><br><br>
	<div align="center">
		<audio controls autoplay>
  			<source src="audio/Don Amitabh Bachchan Top Dialogue.mp3" type="audio/mpeg">
		</audio><br><br>

		<audio controls>
  			<source src="audio/Anand Amitabh Bachchan Dialogues.mp3" type="audio/mp3">
		</audio><br><br>
	
		<audio controls>
  			<source src="audio/Amae Akbar Anthony Dialogue 2.mp3" type="audio/mp3">
		</audio><br><br>
	
		<audio controls>
  			<source src="audio/Kaalia Amitabh Bachchan Dialogues.mp3" type="audio/mp3">
		</audio><br><br>
	
		<audio controls>
  			<source src="audio/Namak Halaal  Amitabh Bachchan Dialogues.mp3" type="audio/mp3">
		</audio><br><br>

		<audio controls>
  			<source src="audio/Satte Pe Satta Amitabh Bachchan Dialogues 2.mp3" type="audio/mp3">
		</audio><br><br><br><br>
	</div>
		
	<div class="footer2">
        <h2><a href="#top" style="color: white">Top</a></h2>
    </div>
</body>
</html>