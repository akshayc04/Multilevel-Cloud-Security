
		<?php
			
			function clean($string) {
			   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

			   return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
			}
			
			$input_file = "";
			
			if(isset($_FILES['input_file0']['name']))
			{
				$t=time();
				$image1 = $_FILES['input_file0']['name']; 
				$tmp1 = $_FILES['input_file0']['tmp_name']; 
					
				$input_file = "toBeJumble/".$t.clean($image1);
					
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
			$str=implode("",$text);
			
			
				$filetext=str_split($str);
				$len=sizeof($filetext);

				$n=$len-1;
				for($i=0;$i<$n;$i++,$n--)
				{
					$temp=$filetext[$n];
					$filetext[$n]=$filetext[$i];
					$filetext[$i]=$temp;
				}

				
				foreach($filetext as $x)
				{
					file_put_contents($input_file, $x , FILE_APPEND);
				}	
				echo $input_file;
		?>