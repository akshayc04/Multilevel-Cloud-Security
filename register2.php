<?php

$con=mysqli_connect("localhost","root","","cloud");

if(mysqli_connect_errno())
{
echo"failed";
mysqli_connect_error();
}


			
$passs1 = $_POST['pwd1'];
$passs2 = $_POST['pwd2'];
$email=$_POST['email'];

if($passs1==$passs2)
{
	$sql1="select * from signup where email='".$_POST['email']."'";
	$result=mysqli_query($con,$sql1);
	if(mysqli_num_rows($result) >= 1)
	{
		echo "<script>alert('Email ID Already exists!, Use a different ID');</script>";
		
		echo '<script>history.go(-1); </script>';
	}
	else
	{	
		$sql="insert into signup(fname,lname,mobile,date,gender,country,email,pwd1)values('".$_POST['fname']."','".$_POST['lname']."','".$_POST['mobile']."','".$_POST['date']."','".$_POST['gender']."','".$_POST['country']."','".$_POST['email']."','".$_POST[	'pwd1']."')";
		if(!mysqli_query($con,$sql))
		{
			echo "error".mysqli_error($con);
		
		}
		else
		{
			echo "<script>alert('registered successfully!');</script>";
			echo "<script>window.location = 'login.php';</script>";
		}
	}
}
else
{
	print "<script type=\"text/javascript\">"; 
	print "alert('The both passwords you have entered do not match!!')"; 
	print "</script>"; 
	echo '<script>history.go(-1); </script>';
}
mysqli_close($con);

?>