<?php
//-----------------------------------------------------------------------------
// BellaBook Copyright � Jem Turner 2004-2007,2008 unless otherwise noted
// http://www.jemjabella.co.uk/
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License. See README.txt
// or LICENSE.txt for more information.
//-----------------------------------------------------------------------------


$title = "[[site_desc]]"; // set your guestbook title here

$admin_name	= "[[admin_username]]";   // admin username
$admin_pass	= "[[admin_pass]]";   // admin password
$admin_email = "[[admin_email]]";   // admin e-mail address
$admin_url = "http://[[domhost]]";   // your website url - used in guestbook footer
$admin_gburl = "[[softurl]]";   // your guestbook url - used in the sign notification emails
$admin_sitename = "[[site_name]]";   // your website name - used in guestbook footer
$secret = "[[secret]]";    // this is like a second password. you won't have to remember it, so make it long and random

$dateformat	= "d M y h:ia";   // date format, more details: php.net/date
$stylecolor	= "bigblue";   // bellabook theme (download more from jemjabella.co.uk/scripts)

$showemail = "yes";   // show email addresses in guestbook - write yes or no
$emailentries = "no";   // email new entries - write yes or no ($admin_email must be filled in, above)

$emailrequired = "yes";   // make email field required - write yes or no
$perpage = "5";   // Pagination - amount of entries per page. 
$smilies = "yes";   // convert text smilies like :) to images? - write yes or no

// spam protection options
$captcha = "no";   // captcha on? - write yes or no
$moderate = "no";   // new entries have to be approved first - write yes or no
$floodcontrol = "no";   // allow flood control? - write yes or no
$allowlinks = "no";   // allow urls in comment; choosing no cuts down on spam


?>