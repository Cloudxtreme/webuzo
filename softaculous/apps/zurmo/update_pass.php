<?php

echo crypt(md5('[[admin_pass]]'), __genSalt());

function __genSalt($input = null)
{
	if (!$input) {
		$input = __getRandomBytes(16);
	}
	
	$_identifier = '2y';
	
	if (version_compare(PHP_VERSION, '5.3.7', '<')) {
		$_identifier = '2a';
	}
	
	$_iterationCountLog2 = 12;
	// Hash identifier
	$identifier = $_identifier;

	// Cost factor - "4" to "04"
	$costFactor  = chr(ord('0') + $_iterationCountLog2 / 10);
	$costFactor .= chr(ord('0') + $_iterationCountLog2 % 10);

	// Salt string
	$salt = __encode64($input, 16);

	// $II$CC$SSSSSSSSSSSSSSSSSSSSSS
	return '$' . $identifier . '$' . $costFactor . '$' . $salt;
}

function __encode64($input, $count){
	$output = '';
	$i = 0;
	$_itoa64 = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	do {
		$c1 = ord($input[$i++]);
		$output .= $_itoa64[$c1 >> 2];
		$c1 = ($c1 & 0x03) << 4;
		if ($i >= $count) {
			$output .= $_itoa64[$c1];
			break;
		}

		$c2 = ord($input[$i++]);
		$c1 |= $c2 >> 4;
		$output .= $_itoa64[$c1];
		$c1 = ($c2 & 0x0f) << 2;

		$c2 = ord($input[$i++]);
		$c1 |= $c2 >> 6;
		$output .= $_itoa64[$c1];
		$output .= $_itoa64[$c2 & 0x3f];
	} while (1);

	return $output;
}

function __getRandomBytes($count){
	
	if (!is_int($count) || $count < 1) {
		//throw new InvalidArgumentException('Argument must be a positive integer');
	}

	// Try OpenSSL's random generator
	if (function_exists('openssl_random_pseudo_bytes')) {
		$strongCrypto = false;
		$output = openssl_random_pseudo_bytes($count, $strongCrypto);
		if ($strongCrypto && strlen($output) == $count) {
			return $output;
		}
	}

	// Try reading from /dev/urandom, if present
	$output = '';
	if (is_readable('/dev/urandom') && ($fh = fopen('/dev/urandom', 'rb'))) {
		$output = fread($fh, $count);
		fclose($fh);
	}

	// Fall back to a locally generated "random" string
	if (strlen($output) < $count) {
		$_randomState = microtime();
		$output = '';
		for ($i = 0; $i < $count; $i += 16) {
			$_randomState = md5(microtime() . $_randomState);
			$output .= md5($_randomState, true);
		}
		$output = substr($output, 0, $count);
	}

	return $output;
}

@unlink('update_pass.php');

?>