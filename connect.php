<?php
session_start();

$con=mysqli_connect("localhost","root","","cloud");

if(mysqli_connect_errno())
{
	echo "failed";
	mysqli_connect_error();
}

	$sql="select * from signup where email='".$_POST['email']."' and pwd1='".$_POST['pwd1']."'";
	$result=mysqli_query($con,$sql); //true if succedded
	
	//echo $sql;

	if($result) 
{
	if(mysqli_num_rows($result) == 1) // Fetch atleast 1 row from db
	{
			//Set session
			$_SESSION['SESS'] = $_POST['email'];
			//echo $_SESSION['SESS'];
			echo "<script>window.location = 'store.php';</script>"; //Login Successful
	}
	else
	{
		echo "<script>alert('Invalid Email/Password');</script>";
		echo "<script>window.location = 'login.php';</script>";
	}
}
else
{
	echo "error";
}

mysqli_close($con);

?>