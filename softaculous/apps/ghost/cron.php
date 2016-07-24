<?php

$host = '[[domhost]]';
$port = '[[port]]';
$cron = true; // Set $cron = false to Stop cron

if(@$_SERVER['SERVER_PORT'] > 1){
	die('Not accesible via the web !');
}

if($cron == true){
	$checkconn = @fsockopen($host, $port, $errno, $errstr, 5);
	if(empty($checkconn)){
		exec('export HOME=[[nodedir]]; cd [[softpath]]; [[nodedir]]/bin/npm start --production >> [[ghostlog]] 2>&1 &', $out, $ret);		
	}
}

?>