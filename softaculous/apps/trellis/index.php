<?php

/*
#======================================================
|    Trellis Desk
|    =====================================
|    By DJ Tarazona (dj@accord5.com)
|    (c) 2010 ACCORD5
|    http://www.trellisdesk.com/
|    =====================================
|    Email: sales@accord5.com
#======================================================
|    @ Version: v1.0.4 Final Build 10440094
|    @ Version Int: 104.4.0.094
|    @ Version Num: 10440094
|    @ Build: 0094
#======================================================
|    | Trellis Desk Main Index
#======================================================
*/

#=============================
# Safe and Secure
#=============================

ini_set( 'register_globals', 0 );

if ( function_exists('date_default_timezone_get') )
{
     date_default_timezone_set( date_default_timezone_get() );
}

if ( @ini_get( 'register_globals' ) )
{
	while ( list( $key, $value ) = each( $_REQUEST ) )
	{
		unset( $$key );
	}
}

#=============================
# Itsy Bitsy Stuff
#=============================

define( 'IN_HD' , 1 );

#ini_set( 'display_errors', 1 );
error_reporting( E_ERROR | E_WARNING | E_PARSE );

#=============================
# Define Our Paths
#=============================

define( "HD_PATH", "./" );
define( 'HD_INC', HD_PATH ."includes/" );
define( 'HD_SRC', HD_PATH ."sources/" );
define( 'HD_SKIN', HD_PATH ."skin/" );

define( 'HD_DEBUG', false );

#=============================
# Main Class
#=============================

require_once HD_INC . "ifthd.php";
$ifthd = new ifthd();

#=============================
# Are We Banned?
#=============================

$banned_users = explode( "\r\n", strtolower( $ifthd->core->cache['config']['ban_names'] ) );
$banned_emails = explode( "\r\n", strtolower( $ifthd->core->cache['config']['ban_emails'] ) );
$banned_ips = explode( "\r\n", strtolower( $ifthd->core->cache['config']['ban_ips'] ) );

if ( in_array( strtolower( $ifthd->member['name'] ), $banned_users ) || ( $ifthd->member['email'] && in_array( strtolower( $ifthd->member['email'] ), $banned_emails ) ) || in_array( strtolower( $ifthd->input['ip_address'] ), $banned_ips ) )
{
	$ifthd->skin->error('no_perm_banned');
}

#=============================
# Other Junk
#=============================

$choice = array(
				'article'		=> 'article',
				'kb'			=> 'article',
				'myaccount'		=> 'account',
				'feed'			=> 'feed',
				'portal'		=> 'portal',
				'pages'			=> 'pages',
				'news'			=> 'news',
				'register'		=> 'register',
				'tickets'		=> 'tickets',
			   );

#=============================
# Require & Run
#=============================

$required = $choice[ $ifthd->input['act'] ];

if ( ! isset( $required ) )
{
	$required = 'portal';
}

require_once HD_SRC . $required .".php";

$run = new $required();
$run->ifthd =& $ifthd;

$run->auto_run();

?>