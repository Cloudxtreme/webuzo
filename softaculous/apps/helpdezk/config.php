<?php 


$config["db_connect"] 	 = 	"mysqlt"; //mysqlt = MYSQL | oci8po = Oracle 
$config["db_hostname"] 	 = 	"[[softdbhost]]";
$config["db_port"] 		 = 	"3306";
$config["db_name"] 		 = 	"[[softdb]]";
$config["db_username"] 	 = 	"[[softdbuser]]";
$config["db_password"] 	 = 	"[[softdbpass]]";
 

 
$config["hdk_url"] 	 = 	"[[softurl]]";
$config["path_default"] 	 = 	"[[relativeurl_]]";
$config["lang"] 	 = 	"en_US";
$config["theme"] 	 = 	"orange";
$config["page_title"] 	 = 	" [HELPDEZK] - Parracho - A free open source Help desk software! ";
date_default_timezone_set('') ;
if($config["lang"] == 'en_US') {
	 $config["id_mask"] 	 = 	" ?999-99-9999";
	 $config["ein_mask"] 	 = 	" ?99-9999999";
	 $config["date_format"] 	 = 	"%m/%d/%Y";
	 $config["hour_format"] 	 = 	"%h:%i %p";
}
if($config["lang"] == 'pt_BR') {
	 $config["id_mask"] 	 = 	" ?999.999.999-99";
	 $config["ein_mask"] 	 = 	" ?99.999.999/9999-99 ";
	 $config["date_format"] 	 = 	"%d/%m/%Y";
	 $config["hour_format"] 	 = 	"%H:%i";
}
 

 ?>
