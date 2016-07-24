<?php
/****************************************************************************
* todoyu is published under the BSD License:
* http://www.opensource.org/licenses/bsd-license.php
*
* Copyright (c) 2012, snowflake productions GmbH, Switzerland
* All rights reserved.
*
* This script is part of the todoyu project.
* The todoyu project is free software; you can redistribute it and/or modify
* it under the terms of the BSD License.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the BSD License
* for more details.
*
* This copyright notice MUST APPEAR in all copies of the script.
*****************************************************************************/

	// General system settings
Todoyu::$CONFIG['SYSTEM']['name'] 			= '[[site_name]]';
Todoyu::$CONFIG['SYSTEM']['locale']			= '[[language]]';
Todoyu::$CONFIG['SYSTEM']['email']			= '[[admin_email]]';
Todoyu::$CONFIG['SYSTEM']['mailer']			= '';

	// Date and time settings
Todoyu::$CONFIG['SYSTEM']['timezone']		= 'America/New_York';
Todoyu::$CONFIG['SYSTEM']['firstDayOfWeek']	= 1;

	// Command line interface
Todoyu::$CONFIG['SYSTEM']['todoyuURL']		= '[[softurl]]';

	// Debugging
Todoyu::$CONFIG['SYSTEM']['logLevel']		= 3;



Todoyu::$CONFIG['SYSTEM']['encryptionKey']	= '[[encryptionKey]]';

?>