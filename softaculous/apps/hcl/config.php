<?php

/**********************************************************************************
* Help Center Live! – http://www.helpcenterlive.com 				  			  *
* by Digital Frontiers, UTO 							  						  *
***********************************************************************************
* Software Version: Help Center Live! v 2.1.7 					  				  *
* Software by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 		      *
* Copyright 2008 by: Digital Frontiers, UTO (http://www.helpcenterlive.com) 	  *
* Support, News, Updates at: http://www.helpcenterlive.com 			  			  *
***********************************************************************************
* This program is free software; you may redistribute it and/or modify it under   *
* the terms of the provided license as published by Digital Frontiers, UTO. 	  *
* 										  										  *
* This program is distributed in the hope that it is and will be useful, but 	  *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE. 						  					  *
* 										  										  *
* See the "license.txt" file for details of the Help Center Live! license. 	 	  *
* The latest version can always be found at http://www.helpcenterlive.com. 	 	  *
***********************************************************************************
* File Comments:																  *
* This file contains configuration settings that need to altered                  *
* in order for Help Center Live to work, and other settings that                  *
* we thought you might want to change. Read the comment before                    *
* each string in order to understand what it should contain                       *
**********************************************************************************/


    // Database info
        // Your database DNS host name, usually localhost
        $conf['host'] = '[[softdbhost]]';

        // The name of the database that contains/will contain the HCL
        // tables.
        $conf['database'] = '[[softdb]]';

        // The username used to access the database.
        $conf['username'] = '[[softdbuser]]';

        // The password for this username
        $conf['password'] = '[[softdbpass]]';

        // You may want to make the tables have a prefix if it is a shared database
        $conf['prefix'] = '[[dbprefix]]';

        // The length of time in seconds that the database cache will be kept
        $conf['expire'] = 86400; //24 hours

    // Installation info
        // If you have safe_mode set to 'on' in your php.ini, change this to true
        $conf['safe_mode'] = false;

        // The URL where HCL is installed
        $conf['url'] = '[[softurl]]';

        // Monitor visitor activity as well as chats in the request monitor
        $conf['monitor_traffic'] = true;

        // The polling method you wish to use
        $conf['poll'] = 'load_balanced';

        // Block IP's from starting a chat - comma separated list.
        $conf['block'] = '0.0.0.0, 255.255.255.255';
        
        // Allow booting of operators
        $conf['boot_client'] = true;
        
        // Allow operators to delete transcripts
        $conf['opdelete']=true;
        
        // Place in demo mode, system will constantly set the admin user and password to admin/admin
        // Don't be stupid and do this on a production system, it's simply to allow testing without 
		// having some smuck lock you out
		//$conf['demomode']=true;

    // Regional info
        // The language you wish to use
        $conf['lang'] = 'english';
        
        // Time offset from GMT
        $conf['offset'] = 0;

    // Misc info
        // Your company or web site's name
        $conf['company'] = '[[site_name]]';

        // The template you wish to use
        $conf['template'] = 'G';
        
        // Will display a link to the forum if chat request fails as
        // well as the default trouble ticket / email links
        $conf['forum_show'] = false;

        // The URL where the forum is installed
        $conf['forum_url'] = 'http://www.example.com/forums';

        // The format that the operator's name is displayed in chats
        // you can use USERNAME, FIRSTNAME and LASTNAME
        // $conf['operator_name'] = 'FIRSTNAME LASTNAME';
        // $conf['operator_name'] = 'FIRSTNAME LASTNAME (USERNAME)';
        // $conf['operator_name'] = 'USERNAME';
        $conf['operator_name'] = 'FIRSTNAME';

        // Text size of the text in the chat window (in pixels)
        $conf['text_size'] = '10';

        // The size of the visitors chat window
        $conf['chat_width'] = '400';
        $conf['chat_height'] = '415';

        // The size of the operator's chat window
        $conf['chat_op_width'] = '400';
        $conf['chat_op_height'] = '600';

        // The size of the operator chat window
        $conf['opchat_width'] = '400';
        $conf['opchat_height'] = '400';

        // The size of the request monitor
        $conf['monitor_width'] = '400';
        $conf['monitor_height'] = '400';

        // The size of the visitors information popup
        $conf['info_width'] = '400';
        $conf['info_height'] = '300';

        // The size of the initiate chat popup
        $conf['initiate_width'] = '400';
        $conf['initiate_height'] = '250';

    // Timers
        // The default settings should be ok.

        // The number of second to put a chat on hold
        $conf['chat_hold'] = '1800';

        // The number of seconds the operator has to accept chat before
        // it polls to next operator
        $conf['session_timeout'] = '30';

        // The number of miliseconds to refresh the tracker.
        // This checks for initiated chat requests and updates the
        // visitors timer so they do not reamin idle and timeout
        $conf['tracker_refresh'] = '10000';

        // The number of seconds the visitor can remain idle until
        // they timeout.
        $conf['traffic_timeout'] = '60';

        // The number of seconds the visitor can remain idle until
        // their total time on site updates as a new visit.
        // Note that if this is different to $conf['traffic_timeout'] and the
        // user revisits a page after between the $conf['traffic_timeout']
        // and $conf['traffic_newvisit'] period the traffic monitor will not
        // refresh to show the visitor again.
        $conf['traffic_newvisit'] = '60';

        // The number of milliseconds to refresh the chat window to check
        // for new chat messages recommended is 3000 to 6000
        $conf['chat_refresh'] = '3000';

        // The number of seconds until the chat session times out
        $conf['chat_timeout'] = '60';

        // The number of miliseconds to refresh the cobrowse tracker.
        // This checks for new cobrowse, coforms and comarkers activity.
        $conf['cobrowse_refresh'] = '8000';

        // The number of milliseconds to refresh the request monitor to check
        // for any new visitors or chat requests recommended is 3000 to 5000
        $conf['monitor_refresh'] = '5000';

        // The number of seconds the operator can remain idle until
        // their status changes to offline
        $conf['live_timeout'] = '40';

        // The number of milliseconds to show the initiate image
        $conf['initiate_timeout'] = '120000';

?>