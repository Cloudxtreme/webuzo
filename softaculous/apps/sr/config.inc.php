<?php
// Automatically created configuration file. Do not change!

/*********************************************************
*        !!! Shadows Rising RPG Configuration File !!!
*
*   Please consider each option carefully. 80% of all
*   start up problems for SR are caused by wrongly set
*   configuration variables.
*
*   Fill out all fields !!!
*
**********************************************************/

$CONFIG = array(
	"var_source"=>"0",
	"enable_gzip"=>"0",
	"database_persistent"=>"0",
	"db_type"=>"mysql",
	"database"=>"[[softdb]]",
	"database_user"=>"[[softdbuser]]",
	"database_password"=>"[[softdbpass]]",
	"database_host"=>"[[softdbhost]]",
	"database_port"=>"",
	"gameroot"=>"[[softpath]]",
	"map_path"=>"[[softpath]]/core/maps",
	"sql_path"=>"[[softpath]]/sql",
	"server_name"=>"[[site_name]]",
	"url_prefix"=>"[[softurl]]",
	"code_base"=>"Shadows Rising RPG Game Engine 0.0.5-CVS",
	"link_forums"=>"[[softurl]]",
	"admin_mail"=>"[[admin_email]]",
	"adminpass"=>"[[admin_pass_raw]]",
	"gzip_level"=>"",
	"sendmail"=>"0",
	"game_installed"=>"1"
);
error_reporting(E_ERROR | E_PARSE);
?>