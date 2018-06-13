<?php
	/*$con=mysqli_connect("localhost","root","","cloud");

	if(mysqli_connect_errno())
	{
		echo "failed";
		mysqli_connect_error();
	}
	*/
	include 'AES.php';
	$imputKey = "128";
	$blockSize = 256;
	
	if(isset($_FILES['input_file']['name']))
	{
		$image1 = $_FILES['input_file']['name']; 
		$tmp1 = $_FILES['input_file']['tmp_name']; 
			
		$input_file = "user_ulpoads/".$image1;
			
		if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1))
		{
			move_uploaded_file($tmp1,$input_file);      
		} 
		else
		{
			$input_file="";
		}
	}
	
	//*******open and read the file contents********//
			$file=fopen($input_file,"r");
			$text=array();
			while(!feof($file))
			{
				$text[]=fgets($file);
			}
			fclose($file);
			//************close the opened file************//


			//*******Empty file contents********//
			file_put_contents($input_file, "");
			//**********************************//

			//*******Jumble and write the data to file********//
			foreach($text as $line)
			{
				$filetext=str_split($line);
				$len=sizeof($filetext);

				foreach($filetext as $x)
				{
					$aes = new AES($x, $imputKey, $blockSize);
					//$aes->setData($x);
					$dec=$aes->decrypt();
					file_put_contents($input_file, $dec , FILE_APPEND);
				}
				
				
				$n=$len-1;
				for($i=0;$i<$n;$i++,$n--)
				{
					$temp=$filetext[$n];
					$filetext[$n]=$filetext[$i];
					$filetext[$i]=$temp;
				}

				
				
			}

	echo $input_file;
?>