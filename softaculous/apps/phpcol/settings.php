<?php
#Application name: PhpCollab
#Status page: 2
#Path by root: ../includes/settings.php

# installation type
$installationType = "online"; //select "offline" or "online"

# select database application
$databaseType = "mysql"; //select "sqlserver", "postgresql" or "mysql"

# database parameters
define('MYSERVER','[[softdbhost]]');
define('MYLOGIN','[[softdbuser]]');
define('MYPASSWORD','[[softdbpass]]');
define('MYDATABASE','[[softdb]]');

# notification method
$notificationMethod = "mail"; //select "mail" or "smtp"

# smtp parameters (only if $notificationMethod == "smtp")
define('SMTPSERVER','');
define('SMTPLOGIN','');
define('SMTPPASSWORD','');

# create folder method
$mkdirMethod = "PHP"; //select "FTP" or "PHP"

# ftp parameters (only if $mkdirMethod == "FTP")
define('FTPSERVER','');
define('FTPLOGIN','');
define('FTPPASSWORD','');

# PhpCollab root according to ftp account (only if $mkdirMethod == "FTP")
$ftpRoot = ""; //no slash at the end

# Invoicing module
$enableInvoicing = "true";

# theme choice
define('THEME','default');

# newsdesk limiter
$newsdesklimit = 1; 

# if 1 the admin logs in his homepage
$adminathome = 0;

# session.trans_sid forced
$trans_sid = "true";

# timezone GMT management
$gmtTimezone = "false";

# language choice
$langDefault = "";

# Mantis bug tracking parameters
// Should bug tracking be enabled?
$enableMantis = "false";

// Mantis installation directory
$pathMantis = "http://localhost/mantis/";  // add slash at the end

# CVS parameters
// Should CVS be enabled?
$enable_cvs = "false";

// Should browsing CVS be limited to project members?
$cvs_protected = "false";

// Define where CVS repositories should be stored
$cvs_root = "D:\cvs"; //no slash at the end

// Who is the owner CVS files?
// Note that this should be user that runs the web server.
// Most *nix systems use "httpd" or "nobody"
$cvs_owner = "httpd";

// CVS related commands
$cvs_co = "/usr/bin/co";
$cvs_rlog = "/usr/bin/rlog";
$cvs_cmd = "/usr/bin/cvs";

# https related parameters
$pathToOpenssl = "/usr/bin/openssl";

# login method, set to "CRYPT" in order CVS authentication to work (if CVS support is enabled)
$loginMethod = "MD5"; //select "MD5", "CRYPT", or "PLAIN"

# enable LDAP
$useLDAP = "false";
$configLDAP[ldapserver] = "your.ldap.server.address";
$configLDAP[searchroot] = "ou=People, ou=Intranet, dc=YourCompany, dc=com";

# htaccess parameters
$htaccessAuth = "false";
$fullPath = "/usr/local/apache/htdocs/phpcollab/files"; //no slash at the end

# file management parameters
$fileManagement = "true";
$maxFileSize = 51200; //bytes limit for upload
$root = "[[softurl]]"; //no slash at the end

# security issue to disallow php files upload
$allowPhp = "false";

# project site creation
$sitePublish = "true";

# enable update checker
$updateChecker = "true";

# e-mail notifications
$notifications = "true";

# show peer review area
$peerReview = "true";

# show items for home
$showHomeBookmarks =  "true";
$showHomeProjects =  "true";
$showHomeTasks =  "true";
$showHomeSubtasks =  "true";
$showHomeDiscussions =  "true";
$showHomeReports =  "true";
$showHomeNotes =  "true";
$showHomeNewsdesk =  "true";

# security issue to disallow auto-login from external link
$forcedLogin = "false";

# table prefix
$tablePrefix = "[[dbprefix]]";

# database tables
$tableCollab["assignments"] = "[[dbprefix]]assignments";
$tableCollab["calendar"] = "[[dbprefix]]calendar";
$tableCollab["files"] = "[[dbprefix]]files";
$tableCollab["logs"] = "[[dbprefix]]logs";
$tableCollab["members"] = "[[dbprefix]]members";
$tableCollab["notes"] = "[[dbprefix]]notes";
$tableCollab["notifications"] = "[[dbprefix]]notifications";
$tableCollab["organizations"] = "[[dbprefix]]organizations";
$tableCollab["posts"] = "[[dbprefix]]posts";
$tableCollab["projects"] = "[[dbprefix]]projects";
$tableCollab["reports"] = "[[dbprefix]]reports";
$tableCollab["sorting"] = "[[dbprefix]]sorting";
$tableCollab["tasks"] = "[[dbprefix]]tasks";
$tableCollab["teams"] = "[[dbprefix]]teams";
$tableCollab["topics"] = "[[dbprefix]]topics";
$tableCollab["phases"] = "[[dbprefix]]phases";
$tableCollab["support_requests"] = "[[dbprefix]]support_requests";
$tableCollab["support_posts"] = "[[dbprefix]]support_posts";
$tableCollab["subtasks"] = "[[dbprefix]]subtasks";
$tableCollab["updates"] = "[[dbprefix]]updates";
$tableCollab["bookmarks"] = "[[dbprefix]]bookmarks";
$tableCollab["bookmarks_categories"] = "[[dbprefix]]bookmarks_categories";
$tableCollab["invoices"] = "[[dbprefix]]invoices";
$tableCollab["invoices_items"] = "[[dbprefix]]invoices_items";
$tableCollab["services"] = "[[dbprefix]]services";
$tableCollab["newsdeskcomments"] = "[[dbprefix]]newsdeskcomments";
$tableCollab["newsdeskposts"] = "[[dbprefix]]newsdeskposts";

# PhpCollab version
$version = "2.5";

# demo mode parameters
$demoMode = "false";
$urlContact = "http://www.sourceforge.net/projects/phpcollab";

# Gantt graphs
$activeJpgraph = "true";

# developement options in footer
$footerDev = "false";

# filter to see only logged user clients (in team / owner)
$clientsFilter = "false";

# filter to see only logged user projects (in team / owner)
$projectsFilter = "false";

# Enable help center support requests, values "true" or "false"
$enableHelpSupport = "true";

# Return email address given for clients to respond too.
$supportEmail = "[[admin_email]]";

# Support Type, either team or admin. If team is selected a notification will be sent to everyone in the team when a new request is added
$supportType = "team";

# enable the redirection to the last visited page, EXPERIMENTAL DO NOT USE IT
$lastvisitedpage = false;

# auto-publish tasks added from client site?
$autoPublishTasks = false;

# html header parameters
$setDoctype = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">";
$setTitle = "PhpCollab";
$setDescription = "Groupware module. Manage web projects with team collaboration, users management, tasks and projects tracking, files approval tracking, project sites clients access, customer relationship management (Php / Mysql, PostgreSQL or Sql Server).";
$setKeywords = "PhpCollab, phpcollab.com, Sourceforge, management, web, projects, tasks, organizations, reports, Php, MySql, Sql Server, mssql, Microsoft Sql Server, PostgreSQL, module, application, module, file management, project site, team collaboration, free, crm, CRM, cutomer relationship management, workflow, workgroup";
?>