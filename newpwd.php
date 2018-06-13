<?php
session_start();

$con=mysqli_connect("localhost","root","","cloud");

if(mysqli_connect_errno())
{
	echo "failed";
	mysqli_connect_error();
}

	$sql="select * from signup where email='".$_POST['email']."' and pwd1='".$_POST['cpwd']."'";
	$result=mysqli_query($con,$sql); //true if succedded
	
	//echo $sql;

	if($result) 
{
	if(mysqli_num_rows($result) == 1) // Fetch atleast 1 row from db
	{
			$sql="update signup set pwd1='".$_POST['pwd1']."' where email='".$_POST['email']."'";
			if(!mysqli_query($con,$sql))
		{
			echo "error".mysqli_error($con);
		}
		else
		{
			echo "<script>alert('password changed succesfully');</script>";
			echo "<script>window.location= 'logout.php';</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid Email/Password');</script>";
		echo "<script>window.location = 'changepwd.php';</script>";
	}
}
else
{
	echo "error";
}

mysqli_close($con);

?>