<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['SYS']['sitename'] = '[[site_name]]';

	// Default password is "joh316" :
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';

$TYPO3_CONF_VARS['EXT']['extList'] = 'info,perm,func,filelist,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports,felogin';

$typo_db_extTableDef_script = 'extTables.php';

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

$TYPO3_CONF_VARS['EXT']['extList'] = 'info,perm,func,filelist,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports,felogin';	// Modified or inserted by TYPO3 Core Update Manager. 
// Updated by TYPO3 Core Update Manager [[reg_time]]
$TYPO3_CONF_VARS['SYS']['encryptionKey'] = '[[encryption_key]]';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.5';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_username = '[[softdbuser]]';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_password = '[[softdbpass]]';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_host = '[[softdbhost]]';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db = '[[softdb]]';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool [[reg_time]]
?>