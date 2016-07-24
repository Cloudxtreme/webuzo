<?php

if(function_exists('password_hash')){
	echo password_hash('[[admin_pass]]', PASSWORD_DEFAULT);
} else {
	echo hash('sha512', '[[admin_pass]]');
}

@unlink('update_pass.php');
?>