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
			width: 50%;
			padding: 1% 1%;
  			margin: 8px;
  			display: inline-block;
  			color: black;
  			border: 1px solid white;
  			box-sizing: border-box;
		}
		.font{
			font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
			font-size: 125%;
		}
    </style>
</head>
<body class="bodyclr">
	<div>
		<nav class="navbar navbar-fixed-top">
			<ul class="clr">
				<li><a class="clr" href="index.php" id="home">HOME</a></li>
				<li><a class="clr" href="photos.php">PHOTOS</a></li>
				<li><a href="" class="clr active" >LOGIN</a></li>
				<li><a class="clr" href="register.php">REGISTER</a></li>
			</ul>
		</nav>
	</div>
	<br><br><br><br><br>
	<?php
		if(@$_GET['Empty']==true)
		{
	?>
	<div class="alert-light text-center my-3" style="color: red; font-size: 120%">
		<?php
			echo $_GET['Empty'];
		?>
	</div>
	<?php
		}
	?>

	<?php
		if(@$_GET['Invalid']==true)
		{
	?>
	<div class="alert-light text-center my-3" style="color: red; font-size: 120%">
		<?php
			echo $_GET['Invalid'];
		?>
	</div>
	<?php
		}
	?>
	<form action="authen_login.php" method="POST">
		<img src="images/login.png" class="icon">
		<div class="container font">
			<label><b>USERNAME</b></label>
			<input type="text" placeholder="Enter username" name="uname" ><br>
			<label><b>PASSWORD</b></label>
			<input type="password" placeholder="Enter password" name="psw" ><br><br><br>
			<button type="submit" name="login" class="btn" onclick="loginFunc()">LOGIN</button>
			<button type="submit" name="forgot" class="btn">FORGOT PASSWORD</button>
		</div>
		<br><br>
	</form>
	
	<div class="footer2">
        <h2><a href="#top" style="color: white">Top</a></h2>
    </div>
</body>
</html>