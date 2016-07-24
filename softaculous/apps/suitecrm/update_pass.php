<?php

echo $pass = __getPasswordHash('[[admin_pass]]');

function __getPasswordHash($password){
	if(!defined('CRYPT_MD5') || !constant('CRYPT_MD5')) {
		// does not support MD5 crypt - leave as is
		if(defined('CRYPT_EXT_DES') && constant('CRYPT_EXT_DES')) {
			return crypt(strtolower(md5($password)),
				"_.012".substr(str_shuffle('./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'), -4));
		}
		// plain crypt cuts password to 8 chars, which is not enough
		// fall back to old md5
		return strtolower(md5($password));
	}
	return crypt(strtolower(md5($password)));
}

@unlink('update_pass.php');

?>