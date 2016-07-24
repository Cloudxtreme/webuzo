<?php

/**
 * razorCMS FBCMS Softaculous Installer
 *
 * Updates configuration in sqlite db based on GET/POST parameters and responds in a RESTful way.
 * Removes the ocnfiguration file once complete. RUN THIS FROM BASE INSTALL PATH!
 *
 * @param String GET/POST email - email address for the default user account
 * @param String GET/POST password - the password for the default user account
 * @param String/Bool GET/POST json - return json response
 * For GET json response - RAZOR_BASE_PATH/softaculous_install.php?json=true&email=razorcms@razorcms.co.uk&password=password
 * For GET raw html response - RAZOR_BASE_PATH/softaculous_install.php?email=razorcms@razorcms.co.uk&password=
 *
 * @return mixed (raw html or json) - The result of the install as a RESTful response (400 on error) with containing data
 *
 * Copywrite 2014 to Present Day - Paul Smith (aka smiffy6969, razorcms)
 *
 * @author Paul Smith
 * @site ulsmith.net
 * @created Jan 2015
 */
 	
// constants
define("RAZOR_BASE_PATH", str_replace(array("softaculous_install.php"), "", $_SERVER["SCRIPT_FILENAME"]));
define('RAZOR_PDO', 'sqlite:'.RAZOR_BASE_PATH.'storage/database/razorcms.sqlite');

// includes
include_once(RAZOR_BASE_PATH.'library/php/razor/razor_file_tools.php');
include_once(RAZOR_BASE_PATH.'library/php/razor/razor_error_handler.php');
include_once(RAZOR_BASE_PATH.'library/php/razor/razor_site.php');
include_once(RAZOR_BASE_PATH."library/php/razor/razor_pdo.php");
include_once(RAZOR_BASE_PATH.'library/php/razor/razor_api.php');

// Load error handler
$error = new RazorErrorHandler();
set_error_handler(array($error, 'handle_error'));
set_exception_handler(array($error, 'handle_error'));

//////////////////////////////////////////////
// update the sqlite db based on get params //
//////////////////////////////////////////////

// first remove the this file
unlink(__FILE__);

// get query GET/POST data
$json = (isset($_GET['json']) || isset($_POST['json']) ? 'json' : null);
$email = (isset($_GET['email']) && !empty($_GET['email']) ? $_GET['email'] : (isset($_POST['email']) && !empty($_POST['email']) ? $_POST['email'] : null));
$password = (isset($_GET['password']) && !empty($_GET['password']) ? $_GET['password'] : (isset($_POST['password']) && !empty($_POST['password']) ? $_POST['password'] : null));
if (empty($email) || empty($password)) RazorAPI::response('email or password not set', $json, 400);

// generate password
$password = RazorAPI::create_hash($password);

// update db
$db = new RazorPDO();
$user = $db->edit_data('user', array('email_address' => $email, 'password' => $password), array('id' => 1), array('id')); 

// check update OK and return result
if (empty($user)) RazorAPI::response('user not updated', $json, 400);
else RazorAPI::response('User details updated', $json);

/* PHP END */