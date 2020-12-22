<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amitabh Bachchan</title>
	<link rel="stylesheet" type="text/css" href="nav2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
		.p1{
			color: white;
			border: 3px solid #f1f1f1;
      		margin: 0% 8% 0% 8%;
      		position: relative;
		}
		img{
			height: 40px;
		}
		h2{
			padding: 1% 1%;
			margin: 0;
		}
    </style>
</head>
<body class="bodyclr">
	<div>
		<nav class="navbar navbar-fixed-top">
			<ul class="clr">
				<li><a class="clr" href="photos_log.php">PHOTOS</a></li>
				<li><a class="clr" href="videos.php">VIDEO CLIPS</a></li>
				<li><a href="" class="clr active">ABOUT</a></li>
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
	<br><br><br><br>
	<div class="p1">
		<iframe src="https://en.wikipedia.org/wiki/Amitabh_Bachchan" frameborder="0"  height="500" width="100%">
		</iframe>
	</div>
	<br><br>
	<div class="p1">
			<h2>
				<a href="https://twitter.com/SrBachchan?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" style="float: left;">Follow AB on <img src="images/twittericon.png"></a>
				<a href="https://www.instagram.com/amitabhbachchan/" target="_blank" style="padding: 18%">Follow AB on 
					<img src="images/instaicon.jpg"></a>
				<a href="https://www.facebook.com/AmitabhBachchan/" target="_blank" style="float: right;">Follow AB on 
					<img src="images/fbicon.jpg"></a>
			</h2>
	</div>
	<br><br>
	<div class="footer2">
		<h2><a href="#top" style="color: white">Top</a></h2>
    </div>
</body>
</html>