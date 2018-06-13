<?php
function clean($string) {
			   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

			   return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
			}

	$f1 = clean($_FILES['input_file2']['name']); 
	$tmp1 = $_FILES['input_file2']['tmp_name']; 
	$pathAndName = "files_to_compress/".date('m_d_Y_h_i_s')."_".$f1;
	
	if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1))
	{
        move_uploaded_file($tmp1,$pathAndName);
    }
	

$password = $_POST['key2'];
$nameofzip = "compressed_files/".date('m_d_Y_h_i_s')."_".$f1.".zip";
$filetoarchive = $pathAndName;

system("7za.exe a -tzip -p$password $nameofzip $filetoarchive");

echo $nameofzip;
?>