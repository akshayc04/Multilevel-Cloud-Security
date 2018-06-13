<?php
session_start();

$con=mysqli_connect("localhost","root","","cloud");

if(mysqli_connect_errno())
{
	echo "failed";
	mysqli_connect_error();
}

	$sql="select * from signup where email='".$_POST['email']."'";
	$result=mysqli_query($con,$sql); //true if succedded
	
	//echo $sql;

	if(mysqli_num_rows($result) == 1) //Fetch atleast 1 row from db
		{	
			$res=mysqli_fetch_array($result);
			email_send($_POST['email'],$res[7]);
			
			echo'<script>alert("Password Mailed Successfully");
			window.location = "login.php";
			</script>';
		}
		else
		{
			echo "<script>alert('Invalid Email');</script>";
			echo "<script>window.location = 'forget.php';</script>";
		}

/* Code To Send E-Mail */	
	
	function email_send($mail,$pwd1)
	{
		$content="Your Password is: ".$pwd1."";
		
		$mail_to = $mail;
		$mail_sub = "Password";
		$mail_content = $content;
		$From_name="No-Reply";
			
		require_once('PHPMailer-master/class.phpmailer.php');
		$mail = new PHPMailer(true);
		$mail->IsSMTP(); // telling the class to use SMTP
		
		try
		{
			$mail->Host       = "smtp.gmail.com";   // SMTP server
			$mail->SMTPAuth   = true;              // enable SMTP authentication
			$mail->SMTPSecure = "ssl";            // sets the prefix to the servier  
			$mail->Port       = 465;             // set the SMTP port for the GMAIL
	  
			$mail->Username   = "plzdonotreplyback@gmail.com";  // GMAIL username
			$mail->Password   = "plzdonotreplyback2423479";            // GMAIL password
			$mail->FromName = "No-Reply";
			$mail->AddReplyTo("plzdonotreplyback@gmail.com","No-Reply");
			$mail->addAddress($mail_to,"User 1");
			$mail->Subject = $mail_sub;
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // 
			$mail->Body = $mail_content;
			if($mail->Send())
			{
				
			}
			else
			{
				
			}
		}
		catch (phpmailerException $e) 
		{
			echo $e->errorMessage(); 
		} 
		catch (Exception $e) 
		{
			echo $e->getMessage(); 
		} 
	}
	
?>