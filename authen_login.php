<?php
if(isset($_POST['login']))
{	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="bigb";
	$conn=new mysqli($servername, $username, $password,$dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		if(empty($_POST['uname']) || empty($_POST['psw']))
		{
			header("location:login.php?Empty=Please fill in the details!");
		}
		else
		{
			$username=$_POST['uname'];
			$password=md5($_POST['psw']);
			$query="SELECT * FROM register where username='$username' AND password='$password'";
			$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
			{
				session_start();
				$_SESSION['User']=$_POST['uname'];
				?>

					<script type="text/javascript">
					alert("Welcome!\nYou are successfully logged in!");
					location.replace("photos_log.php");
					</script>
				<?php
			}
			else
			{
				header("location:login.php?Invalid=Please enter correct username and password!");
			}
		}
	}
}

if(isset($_POST['forgot']))
{

?>

<script type="text/javascript">
	alert("Sorry! Your password cannot be recoverd at this point of time as our system is under upgradation.");
	location.replace("login.php");
</script>

<?php
	
}
mysqli_close($conn);
?>
