<?php
#################################################################################################
#
#  project           	 : phpBook
#  filename          	 : config.php
#  version           	 : 2.1.0
#  last modified by    : John Bell
#  modify date         : 2006/04/17
#  e-mail            	 : info@smartisoft.com
#  purpose           	 : Configuration File
#
#################################################################################################

// MySql Configuration
$cfg_server   = "[[softdbhost]]";  // Your MySQL Server, most cases "localhost"
$cfg_database = "[[softdb]]";    // Your MySQL Database Name
$cfg_db_user  = "[[softdbuser]]"; // Your MySQL Username
$cfg_db_pass  = "[[softdbpass]]"; // Your MySQL Password

// GB Parameters
$cfg_sitekey        = "[[cfg_sitekey]]"; // Security Key for the image confirmation. DO CHANGE it to whatever you want, as long as you want. Just don't use quotes.
$cfg_adminpass      = "[[admin_pass]]";                      // Password for guestbook administration. CHANGE IT!!!
$cfg_gb_title       = "[[site_name]]";                      // Guestbook page title. Should be no-nonsense descriptive, using more than 60 characters is NOT recommended.
$cfg_gb_head        = "[[site_name]]";                      // Guestbook Header (Name).
$cfg_gb_desc        = "[[site_desc]]";    // Enter your description of the guestbook here.
$cfg_start_url      = "[[softurl]]";     // Absolute guestbook location URL with NO trailing slashes
$cfg_notify_address = "[[admin_email]]";           // Send entry notification to this address when a user adds a guestbook entry, leaving it empty will disable notify.
$cfg_gb_style       = "grayblue.css";                   // Specify the style sheet to use for the guestbook. Available files are: "grayblue.css" and "darkred.css".
$cfg_doctype        = "";                               // Set to "frames" if you plan to add the guestbook to a html frames based site (shame on you if you do ;) ).
$cfg_link_target    = "";                               // Enter e.g. "_blank" to open non-guetsbook related link URL's in a new browser window (NOT XHTML COMPLIANT!!!).

$cfg_censor         = true;  // Censor message based on the bad words list.
$cfg_ask_im_info    = true;  // Ask for Instant Messaging info (Jabber, ICQ, MSN, AIM and Yahoo) on post entry, set to false will also deactive IM icon display.
$cfg_visual_confirm = true;  // Ask for a visual confirmation when posting to reduce the amount of spam.
$cfg_location_text  = false; // If set to false you get a country location dropdown instead of a text input field (see $cfg_locations seeting).
$cfg_show_sysinfo   = false; // Show the system information on every bottom page, ask yourself the follwoing: do users realy need to know this kind of info?
$cfg_ask_http				= false; // Ask for the homepage
$cfg_allow_url			= false; // Allow [url tags in message

$cfg_language  = "english.php";   // For e.g. German enter german.php (see languages sub-dir for supported file names)
$cfg_locations = "worldlong.inc"; // For e.g. Europe enter europe.inc (see locations sub-dir for supported file names)
$cfg_lang_dir  = "languages";			// Language Directory, no trailing slashes
$cfg_loc_dir   = "locations";     // Locations Directory, no trailing slashes
$cfg_image_dir = "images";        // Image Directory, no trailing slashes

$cfg_msg_limit    = array(5 ,1000); // Message Limits (min,max).
$cfg_time_limit   = "30";           // Submit timeout in minutes for flood protection, disabled if "".
$cfg_page_entries = "6";            // How many entries per page do you want to see?
$cfg_entry_pages  = "11";           // How many Page Breaks per page, should be like 5,7,9,11,13
$cfg_table_width  = "600";          // Guestbook table width, enter value in pix (e.g. "600") or in % (e.g. "80%")
$cfg_table_align  = "center";       // To e.g. allign the guestbook table to the center of the page enter "center"
$cfg_date_format  = "eu";           // For european Date & Time Format enter "eu"
$cfg_supportpwd   = "2support";     // pwd for support-info, paranoid-setting is ""


#################################################################################################
#  End Configuration
#################################################################################################

//SOFTACULOUS EDITS
// Emulate register_globals on
if (!ini_get('register_globals')) {
    $superglobals = array($_SERVER, $_ENV,
        $_FILES, $_COOKIE, $_POST, $_GET);
    if (isset($_SESSION)) {
        array_unshift($superglobals, $_SESSION);
    }
    foreach ($superglobals as $superglobal) {
        extract($superglobal, EXTR_SKIP);
    }
}

?>
