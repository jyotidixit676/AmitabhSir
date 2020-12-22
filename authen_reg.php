<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname="bigb";
$conn=new mysqli($servername, $username, $password,$dbname);
if(mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$securityque = $_POST['securityque'];
	$securityans = $_POST['securityans'];

	$sql="INSERT INTO register (name, username, gender, password, repassword, securityque, securityans)
	values('$name','$uname','$gender',md5('$password'),md5('$repassword'),'$securityque','$securityans')";
	$query_run = mysqli_query($conn,$sql);
	if($query_run){
		header("location:login.php");
	}
	else
	{
		header("location:register.php?Empty=Please fill in the details correctly!");
	}
	$conn->close();
}
}
?>