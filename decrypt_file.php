<?php
function clean($string) {
			   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

			   return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
			}
	$f1 = clean($_FILES['input_file']['name']); 
	$tmp1 = $_FILES['input_file']['tmp_name']; 
	$pathAndName = "uploads/".$f1;
	
	if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1))
	{
        move_uploaded_file($tmp1,$pathAndName);
    }

//Include the library
require_once 'AESCryptFileLib.php';

//Include an AES256 Implementation
require_once 'aes256/MCryptAES256Implementation.php';

//Construct the implementation
$mcrypt = new MCryptAES256Implementation();

//Use this to instantiate the encryption library class
$lib = new AESCryptFileLib($mcrypt);

//This example encrypts and decrypts the README.md file
$file_to_encrypt = $pathAndName;
//$encrypted_file = "Encrypted/".$pathAndName;
$decrypted_file = "Decrypted/".$pathAndName;


//Ensure target file does not exist
/*@unlink($encrypted_file);
//Encrypt a file
$lib->encryptFile($file_to_encrypt,$_POST['key'], $encrypted_file);*/

//Ensure file does not exist
@unlink($decrypted_file);
//Decrypt using same password
$lib->decryptFile($file_to_encrypt,$_POST['key'], $decrypted_file);

echo $decrypted_file;