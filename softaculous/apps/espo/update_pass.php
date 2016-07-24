<?php

$pass = '[[admin_pass]]';
echo __hash($pass);

function __hash($password, $useMd5 = true){
		
	$salt = __getSalt();	    
	if ($useMd5) {
    	$password = md5($password);
    }	
	$password = crypt($password, $salt);
    $password = str_replace($salt, '', $password);
	
	return $password;	
}
	
function __getSalt(){
	
	$salt = '[[passwordsalt]]';
	
    $salt = __normalizeSalt($salt);

    return $salt;
}

function __normalizeSalt($salt){
        return str_replace("{0}", $salt, '$6${0}$');
}

@unlink('update_pass.php');
?>