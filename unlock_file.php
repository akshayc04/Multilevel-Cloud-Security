<?php

	$f1 = $_FILES['input_file1']['name']; 
	$tmp1 = $_FILES['input_file1']['tmp_name']; 
	$pathAndName = "files_to_uncompress/".date('m_d_Y_h_i_s')."_".$f1;
	
	if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1))
	{
        move_uploaded_file($tmp1,$pathAndName);
    }
	
array_map('unlink', glob("uncompressed_files/*"));
	
$password = $_POST['key1'];
$nameofzip = "uncompressed_files/";
$filetoarchive = $pathAndName;

system("7za.exe x $filetoarchive -o$nameofzip -p$password");

echo "**".$nameofzip;
?>