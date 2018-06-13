<?php 

	$f2 = $_FILES['file2']['name']; 
	$tmp1 = $_FILES['file2']['tmp_name']; 
	$pathAndName = "uploads/".$f2;
	if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1)) {
        move_uploaded_file($tmp1,$pathAndName);      
    }

Class Cryptography
{
	function Decrypt($source, $destination) {
		$key="passwordDR0wSS@P6660juht";
		$iv="password";
		if (extension_loaded('mcrypt') === true)
		{
			if (is_file($source) === true)
			{
				$source = file_get_contents($source);
    			$decryptedSource=self::TripleDesDecrypt($source,$key,$iv);
				if (file_put_contents($destination,$decryptedSource, LOCK_EX) !== false)
				{
					return true;
				}
				echo "no read";
				return false;
			}
			echo "no file";
			return false;
		}
			echo "no mcrypt";

		return false;
	}
	
	function TripleDesDecrypt($buffer,$key,$iv) {
	
		   $buffer= base64_decode($buffer);
		   $cipher = mcrypt_module_open(MCRYPT_3DES, '', 'cbc', '');
		   mcrypt_generic_init($cipher, $key, $iv);
		   $result = mdecrypt_generic($cipher,$buffer);
	        $result=substr($result,0,strpos($result,'___EOT'));
	   	   mcrypt_generic_deinit($cipher);
	 	  return $result;
	}
}

$obj = new Cryptography();
$obj->Decrypt($pathAndName,"dec\\".$f2);
echo"<script>alert('File Successfully Decrypted.');window.location = 'muldec.php';</script>";
?>