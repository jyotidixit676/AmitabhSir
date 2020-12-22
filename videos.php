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
				<li><a href="" class="clr active">VIDEO CLIPS</a></li>
				<li><a class="clr" href="about.php">ABOUT</a></li>
				<li><a class="clr" href="music.php">MUSIC</a></li>
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
	<center>
	<iframe width="750" height="400" src="https://www.youtube.com/embed/mvmPMbXGEdc?autoplay=1&mute=1">
	</iframe><br><br><br>

	<video width="550" height="360" controls>
  		<source src="videos/mastdunia.com-amitabh-bachchan-dialogue-status-1599152555.mp4" type="video/mp4">
	</video><br><br><br>

	<video width="550" height="360" controls>
		<source src="videos/Amitabh Bachchan _ Dialogue Mashup-(You2Audio.Com).mp4" type="video/mp4">
	</video><br><br><br>

	<video width="550" height="360" controls>
  		<source src="videos/Amitabh Bachchan Hits Mashup Dialogues - TinyJuke.com.mp4" type="video/mp4">
	</video><br><br><br>

	<video width="550" height="360" controls>
  		<source src="videos/Amitabh Bachchan Romantic Sridevi Dialogue Short Story Full Screen-(MirchiStatus.com).mp4" type="video/mp4">
	</video><br><br><br>
	</center>

	<div class="footer2">
        <h2><a href="#top" style="color: white">Top</a></h2>
    </div>
</body>
</html>