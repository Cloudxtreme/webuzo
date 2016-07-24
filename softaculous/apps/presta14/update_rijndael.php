<?php

function __getkey(){
	
		$key_size = mcrypt_get_key_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
		$key = __passwdGen($key_size);
		
		return $key;				
}

function __passwdGen($length = 8){
	
		$str = 'abcdefghijkmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		for ($i = 0, $passwd = ''; $i < $length; $i++)
			$passwd .= substr($str, mt_rand(0, strlen($str) - 1), 1);
		return $passwd;
}
	
function __getiv(){

		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
		$iv = base64_encode(mcrypt_create_iv($iv_size, MCRYPT_RAND));
		
		return $iv;
}

$rijndael_iv = __getiv();
$rijndael_key = __getkey();

echo $rijndael_iv.'SOFTACULOUS'.$rijndael_key;

@unlink('update_rijndael.php');

?>