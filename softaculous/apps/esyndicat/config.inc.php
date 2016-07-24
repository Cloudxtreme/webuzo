<?php
//##copyright##

// eSyndiCat Free {version} installation proccess generated configuration file: [[ins_date]]

if(false === strpos(PHP_SAPI, "ap") && isset($_SERVER['REQUEST_URI']))
{
	$t = $_SERVER['REQUEST_URI'];
	if (false!==strpos($t, "?"))
	{
		$t = substr($t, 0, strpos($t, "?"));
	}
	if (false!==strpos($t, ".php/"))
	{
		$t = substr($t, 0, strpos($t, ".php")+4);
	}
	elseif(false === strpos($t, ".php"))
	{
		$t .= "index.php";
	}
	$_SERVER['SCRIPT_NAME'] = $t;
	unset($t);
}

strip_params();


define("ESYN_DS", DIRECTORY_SEPARATOR);

// Server's document root
define("ESYN_ROOT", '[[softroot]]'.ESYN_DS); 

// Directory where eSyndiCat is installed relative to "ESYN_ROOT"
define("ESYN_DIR", '[[relativeurl_]]'.ESYN_DS);

define("ESYN_HOME", ESYN_ROOT.ESYN_DIR);
define("ESYN_PLUGINS", ESYN_HOME.'plugins'.ESYN_DS);
define("ESYN_INCLUDES", ESYN_HOME.'includes'.ESYN_DS);
define("ESYN_CLASSES", ESYN_INCLUDES.'classes'.ESYN_DS);

define("SMARTY_DIR", ESYN_INCLUDES."smarty".ESYN_DS);

define("ESYN_TMP_NAME", 'tmp');
define("ESYN_TMP", ESYN_HOME.ESYN_TMP_NAME.ESYN_DS);
define("ESYN_CACHEDIR", ESYN_TMP.'cache'.ESYN_DS);

define("ESYN_ADMIN_DIR", "admin");
define("ESYN_ADMIN_FOLDER", "admin");
define("ESYN_ADMIN_HOME", ESYN_HOME.ESYN_ADMIN_FOLDER.ESYN_DS);
define("ESYN_ADMIN_TEMPLATES", ESYN_ADMIN_HOME.'templates'.ESYN_DS);
define("ESYN_ADMIN_CLASSES", ESYN_CLASSES.ESYN_ADMIN_DIR.ESYN_DS);

define("ESYN_TEMPLATES", ESYN_HOME.'templates'.ESYN_DS);

define("ESYN_SALT_STRING", "[[ESYN_SALT_STRING]]");

define("ESYN_MYSQLVER", "41");

define("ESYN_DBHOST", "[[softdbhost]]");
define("ESYN_DBNAME", "[[softdb]]");
define("ESYN_DBUSER", "[[softdbuser]]");
define("ESYN_DBPASS", "[[softdbpass]]");
define("ESYN_DBPREFIX", "[[dbprefix]]");
define("ESYN_DBPORT", "3306");

define("ESYN_BASE_URL", "http://[[domhost]]/");
define("ESYN_URL", "[[softurl]]/");

define("ESYN_DEBUG_MAX_SQL_TIME", 0.01);
define("ESYN_DEBUG_MAX_HOOK_TIME", 0.01);

error_reporting(E_ALL ^ E_NOTICE);

/*
Level:
	0: production (no debug) the fastest
	1: turn on errors and show errors on the browser
	2: as 1 and also logs database queries with execution time

	WARNING: don't leave DEBUG at level 2 as it logs all the DB operations verbosely and your site
		will be too slow. Use it only for profiling after using it is recommended to clear the tmp/logs/user_notice.log file.
*/
define("ESYN_DEBUG", 0);

if(version_compare("5.0", PHP_VERSION, ">"))
{
	$_SERVER['REQUEST_TIME'] = time();
	include(ESYN_INCLUDES."compat.inc.php");

	$old_error_handler = set_error_handler("esynErrorHandler");
}
else
{
	$old_error_handler = set_error_handler("esynErrorHandler", E_ALL ^ E_NOTICE);

	$timezone = ini_get('date.timezone');

	if (empty($timezone))
	{
		date_default_timezone_set('UTC');
	}
}



if(ESYN_DEBUG == 0)
{
	ini_set("display_errors", "0");
}

function esynErrorHandler($errno, $errstr, $errfile, $errline)
{
	if (ESYN_DEBUG == 0)
	{
		return true;
	}	

	if (error_reporting() == 0)
	{
		return;
	}

	$exit = false;

	switch ($errno)
	{
		case E_NOTICE:
			$log_file = "notice.log";
			$log_msg ="NOTICE: {$errstr} ";
			break;
		
		case E_USER_NOTICE:
			$log_file = "user_notice.log";
			$log_msg ="USER_NOTICE: {$errstr} ";
			break;

		case E_WARNING:
			$log_file = "error.log";
			$log_msg ="WARNING: {$errstr} ";
			break;

		case E_USER_ERROR:
			$log_file = "error.log";
			$log_msg = "FATAL_USER_ERROR: {$errstr} ";
			$exit = true;
			break;

		case E_USER_WARNING:
			$log_file = "error.log";
			$log_msg ="eSynDicat WARNING: {$errstr} ";
			break;

		default:
			$log_file = "error.log";
			$log_msg = $errstr.' ';
			break;
	}

	$errfile = str_replace(ESYN_ROOT,"", $errfile);
	$log_file = ESYN_TMP."log".ESYN_DS.$log_file;
	$log_msg_date = "[ ".date("d M Y H:i:s")." ]\t";

	$log_msg .= "{$log_msg_date} in $errfile:$errline\n\n";

	if (ESYN_DEBUG > 0)
	{
		if (!file_exists(dirname($log_file)))
		{
			$result = @mkdir(dirname($log_file), 0777);

			if (!$result)
			{
				echo esyn_display_error("Directory Creation Error | tmp_dir_permissions | Can not create the 'tmp/log' directory.");
				exit;
			}
		}

		if (is_writeable(dirname($log_file)))
		{
			if (file_exists($log_file))
			{
				if (!is_writeable($log_file))
				{
					chmod($log_file, 0777);
				}
			}

			file_put_contents($log_file, $log_msg, FILE_APPEND);
		}
		else
		{
			echo esyn_display_error("Directory Permissions Error | dir_permissions_error | The 'tmp/log' directory is not writable. Please set writable permissions.");
			exit;
		}
	}

	if ($exit)
	{
		echo esyn_display_error($errstr);

		exit;
	}

	if (ESYN_DEBUG > 0)
	{
		echo nl2br($log_msg);
	}
}

function esyn_display_error($errstr)
{
	$content = file_get_contents(ESYN_INCLUDES.'common'.ESYN_DS.'error_handler.html');

	$error_solutions = '';

	list($error_title, $error_key, $error_description) = explode(' | ', $errstr);

	switch($error_key)
	{
		case 'db_connect_error':
			$error_solutions .= 'Below is a list of possible solutions:';
			$error_solutions .= '<ul><li>Make sure you have the correct username and password.</li>';
			$error_solutions .= '<li>Make sure you have the correct database hostname.</li>';
			$error_solutions .= '<li>Make sure that the database server is running.</li></ul>';
			break;
		case 'db_select_error':
			$error_solutions .= 'Below is a list of possible solutions:';
			$error_solutions .= '<ul><li>Make sure you have created the database.</li>';
			$error_solutions .= '<li>Make sure you have granted privileges for your user on the database.</li>';
			$error_solutions .= '<li>Make sure you have the correct database name.</li></ul>';
			break;
		case 'tmp_dir_absent':
			$error_solutions .= 'Below is a list of possible solutions:';
			$error_solutions .= "<ul><li>Make sure 'tmp' directory exists.</li></ul>";
			break;
		case 'tmp_dir_permissions':
			$error_solutions .= 'Below is a list of possible solutions:';
			$error_solutions .= "<ul><li>Make sure 'tmp' directory has writable permissions.</li>";
			$error_solutions .= "<li>Run the following command: <i>chmod 777 tmp</i></li></ul>";
			break;
		case 'dir_permissions_error':
			$error_solutions .= 'Below is a list of possible solutions:';
			$error_solutions .= "<ul><li>Make sure the directory exists.</li>";
			$error_solutions .= "<li>Make sure the directory has writable permissions.</li>";
			$error_solutions .= "<li>Run the following command: <i>chmod 777 tmp</i></li></ul>";
			break;
	}

	if (empty($error_key))
	{
		$error_key = 'docs';
	}

	$search = array('{title}', '{base_url}', '{error_title}', '{error_description}', '{error_solutions}', '{error_key}', '{additional}');
	$replace = array($error_title.' :: eSyndiCat Directory Software '.ESYN_VERSION, ESYN_URL, $error_title, $error_description, $error_solutions, $error_key, '');

	$content = str_replace($search, $replace, $content);

	return $content;
}

/**
 * strip_params used when magic quotes is on
 * 
 * @access public
 * @return void
 */
function strip_params()
{
	$in = array(&$_GET, &$_POST, &$_COOKIE, &$_FILES);
	while (list($k,$v) = each($in))
	{
		foreach ($v as $key => $val)
		{
			if (!is_array($val)) {
				$in[$k][$key] = stripslashes($val); continue;
			}
			$in[] =& $in[$k][$key];
		}
	}
	unset($in);
}