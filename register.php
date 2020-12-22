<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amitabh Bachchan</title>
	<link rel="stylesheet" type="text/css" href="nav2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="myScript.js"></script>
	<style>
		input,select{
			width: 60%;
			padding: 1% 1% 1% 1%;
  			margin: 8px;
  			display: inline-block;
  			color: black;
  			border: 1px solid white;
		}
    </style>
</head>
<body class="bodyclr">
	<div>
		<nav class="navbar navbar-fixed-top">
			<ul class="clr">
				<li><a class="clr" href="index.php" id="home">HOME</a></li>
				<li><a class="clr" href="photos.php">PHOTOS</a></li>
				<li><a class="clr" href="login.php">LOGIN</a></li>
				<li><a class="clr active" href="">REGISTER</a></li>
			</ul>
		</nav>
	</div>
	<br><br><br><br>
	<center><h2 class="font">Please fill in this form to create your account.</h2></center>
	<form action="authen_reg.php" method="POST" onSubmit = "return checkPassword(this)">
		<img src="images/login.png" class="icon">
		<div class="container">
			<table class="td1">
				<tr>
					<td><b>ENTER YOUR NAME</b></td>
					<td><input type="text" placeholder="Enter your name" size=55 name="name" required></td>
				</tr>
				<tr>
					<td><b>EMAIL ID</b></td>
					<td><input type="email" placeholder="Your email ID is your username" name="uname" required></td>
				</tr>
				<tr>
					<td><b>GENDER</b></td>
					<td>
						<input type="radio" name="gender" value="MALE">MALE
						<input type="radio" name="gender" value="FEMALE" checked="checked">FEMALE
						<input type="radio" name="gender" value="TRANSGENDERS">TRANSGENDERS
						<input type="radio" name="gender" value="OTHERS">OTHERS
  					</td>
				</tr>
				<tr>
					<td><b>PASSWORD</b></td>
					<td><input type="password" placeholder="Enter your password" name="password" required></td>
				</tr>
				<tr>
					<td><b>RETYPE PASSWORD</b></td>
					<td><input type="password" placeholder="Retype your password" name="repassword" required></td>
				</tr>
				<tr>
					<td>
						<b>SECURITY QUESTION</b><br>
						<select style="width: 90%" required="" name="securityque">
    						<option value="0">Select your security question</option>
    						<option value="What is your place of birth ?">What is your place of birth ?</option>
    						<option value="What is your favorite color ?">What is your favorite color ?</option>
    						<option value="What is your nickname ?">What is your nickname ?</option>
    						<option value="What is your hobby ?" >What is your hobby ?</option>
    						<option value="What is very important to you ?" >What is very important to you ?</option>
  						</select>
  					</td>
  					<td><br>
  						<input type="text" placeholder="Enter your answer" name="securityans" required="">
					</td>
				</tr>
			</table><br><br>
			<button type="submit"  class="btn font" name="submit" onclick="regFunc()">REGISTER</button>
			<button type="reset"  class="btn" name="submit">RESET</button></td>
		</div>
	</form><br><br>
	<?php
		if(@$_GET['Empty']==true)
		{
	?>
	<div class="alert-light text-center my-3" style="color: red">
		<?php
			echo $_GET['Empty'];
		?>
	</div>
	<?php
		}
	?>

	<script type="text/javascript">
		function checkPassword(form) { 
                password = form.password.value; 
                repassword = form.repassword.value; 

                if (password == '') 
                    alert ("Please enter Password"); 
                
                else if (repassword == '') 
                    alert ("Please enter confirm password"); 
                     
                else if (password != repassword) { 
                    alert ("\nPasswords did not match: Please try again...") 
                    return false; 
                }

                else{ 
                    alert("Passwords Matched!") 
                    return true; 
                } 
            } 	
	</script>

	<div class="footer2">
        <h2><a href="#top" style="color: white">Top</a></h2>
    </div>
</body>
</html>