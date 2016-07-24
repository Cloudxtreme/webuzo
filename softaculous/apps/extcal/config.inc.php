<?php
// ExtCalendar configuration file

// DB configuration
$CONFIG['dbsystem'] = "mysql";    // Your database system
$CONFIG['dbserver'] = "[[softdbhost]]";    // Your database server
$CONFIG['dbuser'] = "[[softdbuser]]";      // Your db username
$CONFIG['dbpass'] = "[[softdbpass]]";      // Your db password
$CONFIG['dbname'] = "[[softdb]]";      // Your database name


// DB TABLE NAMES PREFIX
$CONFIG['TABLE_PREFIX'] =                "[[dbprefix]]";

// FS configuration
$CONFIG['FS_PATH'] =                         "[[softpath]]/";        // Your file system path
$CONFIG['calendar_url'] =                    "[[softurl]]/";        // Your calendar web url
?>