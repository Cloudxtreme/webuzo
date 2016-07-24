<?php

$user = __getHashedString('[[admin_username]]');
$pass = __getHashedString('[[admin_pass]]');

echo $user.'__softaculous__'.$pass;

function __getHashedString($password) {
	$cost = 10;
	if (extension_loaded('openssl')) {
		$salt = strtr(substr(base64_encode(openssl_random_pseudo_bytes(17)),0,22), '+', '.');
	} elseif (extension_loaded('mcrypt')) {
		$salt = strtr(substr(base64_encode(mcrypt_create_iv(17, MCRYPT_DEV_URANDOM)),0,22), '+', '.');
	} else {
		$salt = "";
		for ($i = 0; $i < 22; $i++) {
			$salt .= substr("./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789", mt_rand(0, 63), 1);
		}
	}
	$salt = sprintf("$2a$%02d$", $cost) . $salt;
	return crypt($password, $salt);
}

@unlink('update_pass.php');

?>