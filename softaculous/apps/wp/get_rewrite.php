<?php

// Server detection

/**
 * Whether the server software is Apache or something else
 * @global bool $soft_is_apache
 */
$soft_is_apache = (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'LiteSpeed') !== false);

if(!empty($soft_is_apache)){
	echo 'soft_is_apache';
}else{
	echo 'soft_not_apache';	
}


@unlink('get_rewrite.php');

?>