<?php

$salt_config = md5(mt_rand() . microtime(true));
echo $salt_db = '$2y$11$'.__randomBase64String(22);
echo '<SOFTACULOUS>';
echo $pass = substr(crypt('[[admin_pass]]' . '[[salt_config]]', $salt_db), 29);
		
function __randomBase64String($requiredLength = 22) {

	$buffer = '';
	$rawLength = (int) ($requiredLength * 3 / 4 + 1);
	$valid = false;

	if(function_exists('mcrypt_create_iv')) {
		$buffer = mcrypt_create_iv($rawLength, MCRYPT_DEV_URANDOM);
		if($buffer) $valid = true;
	}

	if(!$valid && function_exists('openssl_random_pseudo_bytes')) {
		$buffer = openssl_random_pseudo_bytes($rawLength);
		if($buffer) $valid = true;
	}

	if(!$valid || strlen($buffer) < $rawLength) {
		$bl = strlen($buffer);
		for($i = 0; $i < $rawLength; $i++) {
			if($i < $bl) {
				$buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
			} else {
				$buffer .= chr(mt_rand(0, 255));
			}
		}
	}

	$salt = str_replace('+', '.', base64_encode($buffer));
	$salt = substr($salt, 0, $requiredLength);

	$salt .= $valid; 

	return $salt;
}

@unlink('update_pass.php');

?>