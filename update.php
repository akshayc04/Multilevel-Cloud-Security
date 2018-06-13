<?php
session_start();
if(!isset($_SESSION['SESS']))
{
echo"<script>alert('Login to access this page'); window.location = 'login.php';</script>";
}
?>
<?php
$con=mysqli_connect("localhost","root","","cloud");

if(isset($_SESSION['SESS']))
{

if(mysqli_connect_errno())
{
	echo"failed";
	mysqli_connect_error();
}
if (isset($_SESSION['SESS']))
	{
	$sql="update signup set fname='".$_POST['fname']."',lname='".$_POST['lname']."',mobile='".$_POST['mobile']."',date='".$_POST['date']."',gender='".$_POST['gender']."',country='".$_POST['country']."' where email='".$_SESSION['SESS']."'";
	if(!mysqli_query($con,$sql))
	{
		echo "error".mysqli_error($con);
	}
	else
	{
		
		echo "<script>alert('Update Successfull!');</script>";
		echo "<script>window.location = 'account.php';</script>";
	}
}

	mysqli_close($con);
}
?>