; <?php die(); /* Do not remove this line */ ?>

; The semicolons ';' are used preceding a comment line, or a line which has data
; that is not being used.

; This file is divided into sections,
; Each one of them corresponds to one
; environment, it is used only one at a time, depending on what is speficied in
; index.php, inside folder 'htdocs' in the line that has:
; define('PHPR_CONFIG_SECTION', 'production');

; You could leave that line as it is, and in configuration.php just modify the
; parameters inside [production] section. You can also add your own sections.

[production]

;;;;;;;;;;;;
; LANGUAGE ;
;;;;;;;;;;;;

; Here it is specified the default language for the system, could be "de" for
; German, "en" for English or "es" for Spanish. Actually, the language for each
; user is specified individually from Administration -> User
language = "en"

;;;;;;;;;
; PATHS ;
;;;;;;;;;

; Path where will be placed files uploaded by the user.
uploadPath = "[[softdatadir]]/upload/"

; Path where will be placed temporaly files.
tmpPath = "[[softdatadir]]/tmp/"

; Path where will be placed modules created by the admin.
applicationPath = "[[softdatadir]]/application/"

; Path where webdav resides
webdavPath = "[[softdatadir]]/webdav/"

;;;;;;;;;;;;
; DATABASE ;
;;;;;;;;;;;;

; For this Developer Release, it just has been tested with pdo_mysql.
database.adapter = "Pdo_Mysql"

; The assigned name or IP address for the database server.
database.params.host = "[[softdbhost]]"

; Username and password with the appropriate rights for Phprojekt to access to
; the database.
database.params.username = "[[softdbuser]]"
database.params.password = "[[softdbpass]]"

; Name of the database, inside the server
database.params.dbname = "[[softdb]]"
database.params.port = 3306

database.params.charset = "utf8"

;;;;;;;
; LOG ;
;;;;;;;

; Here will be logged things explicitly declared.
; E.G.: (PHP) Phprojekt::getInstance()->getLog()->debug("String to be logged");
log.debug.filename = "[[softdatadir]]/logs/debug.log"


; This is another type of logging.
; E.G.: (PHP) Phprojekt::getInstance()->getLog()->err("String to be logged");
; Note for developers: there are many different type of logs defined that can be
; added here, see the complete list in phprojekt/library/Phprojekt/Log.php
log.err.filename = "[[softdatadir]]/logs/err.log"

; If this is enabled, a stack trace will be logged for every logged message
log.printStackTraces = false

;;;;;;;;;;;
; MODULES ;
;;;;;;;;;;;

; Not used at the moment, leave it as it is.
itemsPerPage = 3

; Users
; How the users are displayed in the system
; 0 = lastname, firstname
; 1 = username, lastname, firstname
; 2 = username
; 3 = firstname, lastname
userDisplayFormat  = 0

; File containing words that should not be indexed in the search
searchStopwordList = ""

; Max size in bytes that is allowed to be uploaded per file.
; 1 kb = 1024    bytes.
; 1 Mb = 1048576 bytes.
maxUploadSize = 512000

;;;;;;;;
; MAIL ;
;;;;;;;;

; Mail class is currently used by Notification class and Minutes module.

; 0 = Read SMTP parameters from here (smtpServer, smtpUser, smtpPassword, etc)
; 1 = Read SMTP parameters from php.ini
mailTransport = 0;

; If mailTransport is set to 0, then fill all the needed 'smtp*' values:
; Name or IP address of the SMTP server to be used to send that notifications.
smtpServer = "localhost"
; If the SMTP server requires authentication, remove the semicolons ';' in the
; three following lines and write inside the inverted commas "" the appropriate
; username and password. Auth mode: leave this as "login" if you don't know.
; Other available options: plain, cram-md5
;smtpAuth     = "login"
;smtpUser     = ""
;smtpPassword = ""
; You may specify SSL and Port, if the SMTP server of your choice requires them.
;smtpSsl      = ""
;smtpPort     = ""

; If the email is configured to be sent in Text mode, whether to use \r\n or \n
; for the end of line.
; (0 = \r\n  1 = \n)
mailEndOfLine = 0

;;;;;;;;
; MISC ;
;;;;;;;;

; Use compressed dojo to improve the speed of loading.
compressedDojo = true


;;;;;;;;;
; FRONT ;
;;;;;;;;;

; Activate the mail notification by default
front.notificationEnabledByDefault = false

; Optional email support address to show inside error messages, general help and logo alt text
front.supportAddress = ""

;;;;;;;;;;;;;;;;;;;;;
; FRONTEND MESSAGES ;
;;;;;;;;;;;;;;;;;;;;;

; Show messages directely to the user if something will be changed on their data,
; projects, modules, items, etc...
; Options: true/ false
frontendMessages = true

; Set how long a frontend messgae is valid in minutes.
validPeriod = 2

; There is a notification to remind the user to a meeting she/he is invited in.
; Define here the minutes where the notification should appear
; before the meeting starts. This should be set in minutes!
remindBefore = 15

; Define the long polling time in seconds. Max. value is 20s!
pollingTime = 20

; Define the polling loops in seconds
; This is the interval after a new poll will be done.
pollingLoop = 30

;;;;;;;;;;;;;;;;;;
; AUTHENTICATION ;
;;;;;;;;;;;;;;;;;;

; Options: default/ldap
authentication.mode = 'default'

; Please make sure that your ldap users have 'givenname', 'sn' and 'mail' properties when using ldap.

; Default values for new users [0/1]. DO NOT SET THIS TO 1 WITHOUT KNOWING WHAT YOU DO!
authentication.integration.admin = 0
; default status. 'A' for Active, 'I' for Inactive
authentication.integration.status = 'A'
; If not set, default config parameter 'language' will be used
authentication.integration.language = 'en'
; default timezone for new users. Look into phprojekt/library/Phprojekt/Converter/Time.php line 119ff
authentication.integration.timeZone = '0000002'

; A comma separated list of users who should have admin privileges in PHProjekt.
; This will override the authentication.integration.admin parameter for the
; specified users if the default is 0. Changes to the list also
; affect to old users during their login. However, if user is already admin,
; the setting cannot unset by removing the username from the list!
; Default PHProjekt admin with id=1 is not authenticated through LDAP!
;authentication.integration.systemAdmins = 'username,username2'

; PLEASE NOTE THAT THESE CONFIGURATIONS SHOULD BE CAREFULLY SET
; FOR THE LDAP AUTHENTICATION TO WORK!

; If you are not an expert in LDAP configurations, please
; consult the following references.
; LDAP configuration vars explainded at:
; http://framework.zend.com/manual/en/zend.ldap.api.html
; Example at:
; http://framework.zend.com/manual/en/zend.auth.adapter.ldap.html

; authentication.ldap.server1.host                   = "ldaphost"
; authentication.ldap.server1.port                   = 389
; authentication.ldap.server1.useSsl                 = false
; authentication.ldap.server1.useStartTls            = false
; authentication.ldap.server1.accountDomainName      = "domain.com"
; authentication.ldap.server1.accountDomainNameShort = "DOMAIN"
; authentication.ldap.server1.baseDn                 = "OU=OrgUnit,DC=domain,DC=com"
; authentication.ldap.server1.allowEmptyPassword     = false
; authentication.ldap.server1.bindRequiresDn         = false
; authentication.ldap.server1.optReferrals           = false
; authentication.ldap.server1.tryUsernameSplit       = false
; authentication.ldap.server1.accountFilterFormat    = null