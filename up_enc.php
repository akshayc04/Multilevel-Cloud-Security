<?php

	$f1 = $_FILES['file1']['name']; 
	$tmp1 = $_FILES['file1']['tmp_name']; 
	$pathAndName = "uploads/".$f1;
	if(!empty($_FILES) && file_exists($tmp1) && is_uploaded_file($tmp1)) {
        move_uploaded_file($tmp1,$pathAndName);      
    }

Class Cryptography
{
	function Encrypt($source, $destination)	{
		$key="passwordDR0wSS@P6660juht";
        $iv="password";

		if (extension_loaded('mcrypt') === true)
		{
			if (is_file($source) === true)
			{
				$source = file_get_contents($source);
				$encryptedSource=$this->TripleDesEncrypt($source,$key,$iv);
				if (file_put_contents($destination,$encryptedSource, LOCK_EX) !== false)
				{
					return true;
				}
				return false;
			}
			return false;
		}

		return false;
	}

	function TripleDesEncrypt($buffer,$key,$iv) {

			$cipher = mcrypt_module_open(MCRYPT_3DES, '', 'cbc', '');
			$buffer.='___EOT';
			$extra = 8 - (strlen($buffer) % 8);
			if($extra > 0) {
			for($i = 0; $i < $extra; $i++) {
				$buffer .= '_';
				}
			}
	     	 mcrypt_generic_init($cipher, $key, $iv);
		 $result = mcrypt_generic($cipher, $buffer);
		 mcrypt_generic_deinit($cipher);
		return base64_encode($result);
	}
}
$obj = new Cryptography();
$obj->Encrypt($pathAndName,"enc\\".$f1);

echo"<script>alert('File Successfully Encrypted.');window.location = 'mulenc.php';</script>";
?>