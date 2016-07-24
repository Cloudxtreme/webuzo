<?php

// Initiate the installer
exec('cd [[softpath]]; [[php_path]] [[softpath]]/index.php install < [[softpath]]/blesta_install.input', $out, $ret);

// Do we need to try once again ?
if(strpos(implode('', $out), "Finished") === false){
	exec('cd [[softpath]]; [[php_path]] [[softpath]]/index.php install < [[softpath]]/blesta_install2.input', $out1, $ret1);

	// Did the installation fail ?
	if(strpos(implode('', $out1), "Finished") === false){
		echo 'Failed';
		return false;
	}
}

echo 'Finished';

?>