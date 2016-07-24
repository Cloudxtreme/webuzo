<?php
/*
* Website's main configuration data language independent
* More: http://opensolution.org/docs/?p=en-settings
*/
unset( $config, $lang, $aData );

/*
* If a website is under development, leave the DEVELOPER_MODE option enabled
* More: http://opensolution.org/docs/?p=en-settings#DEVELOPER_MODE
*/
define( 'DEVELOPER_MODE', true ); // comment this line once a website is publishing
if( defined( 'DEVELOPER_MODE' ) ){
  error_reporting( E_ALL | E_STRICT );
}

/*
* Email as login and password used to log in to the administration panel
* Ensure their security. Don't use passwords such as "admin", "1234", "qwerty" etc.
* More: http://opensolution.org/docs/?p=en-settings#login_email
*/
$config['login_email'] = "[[admin_email]]";
$config['login_pass'] = "[[admin_pass]]";

/*
* Setting IP address from which loging in to administration is possible
* More: http://opensolution.org/docs/?p=en-settings#allowed_ip_admin_panel
*/
$config['allowed_ip_admin_panel'] = null; // default value: null

/*
* Variable stores skin directory name
* More: http://opensolution.org/docs/?p=en-settings#skin
*/
$config['skin'] = 'default'; // default value: 'default'

/*
* Thumbnail sizes and image localizations. When adding a new localization, assign it a number not less than 50
* More: http://opensolution.org/docs/?p=en-settings#images_thumbnails
*/
$config['images_thumbnails'] = Array( 100, 200 ); // default value: Array( 100, 200 )
$config['images_locations'] = Array( 1 => 'Left side', 2 => 'Right side', 0 => 'List only' ); // default value: Array( 1 => 'Left side', 2 => 'Right side', 0 => 'List only' )

/*
* Menu types presented in a form of an array. Key 0 in the variable is reserved for hidden menu!
* More: http://opensolution.org/docs/?p=en-settings#pages_menus
*/
$config['pages_menus'] = Array( 1 => 'Top menu', 0 => 'Hidden' ); // default value: Array( 1 => 'Top menu', 0 => 'Hidden' )

/*
* Theme settings you can choose from when editing a page
* More: http://opensolution.org/docs/?p=en-settings#themes
*/
$config['themes'] = Array(
  1 => Array( 'header.php', 'page.php', 'footer.php' ), // default value: 1 => Array( 'header.php', 'page.php', 'footer.php' )
);

/*
* The variable stores default language version. The website will be displayed in this language version until a client changes to another translation
* More: http://opensolution.org/docs/?p=en-settings#default_language
*/
$config['default_language'] = 'en'; // default value: 'en'

/*
* Translation of field descriptions and messages in the administration panel
* More: http://opensolution.org/docs/?p=en-settings#admin_lang
*/
$config['admin_lang'] = 'en'; // default value: 'en'

/*
* Administration file name
* More: http://opensolution.org/docs/?p=en-settings#admin_file
*/
$config['admin_file'] = 'admin.php'; // default value: 'admin.php'

/*
* The variable disables loading of sliders client-side
* More: http://opensolution.org/docs/?p=en-settings#enabled_sliders
*/
$config['enabled_sliders'] = true; // possible values: true (default), null

/*
* Option to disable a WYSIWYG editor (default editor: tinyMCE)
* More: http://opensolution.org/docs/?p=en-settings#wysiwyg
*/
$config['wysiwyg'] = 'tinymce'; // possible values: 'tinymce' (default), null

/*
* The variable allows to increase script's speed by using cache in database/cache/
* More: http://opensolution.org/docs/?p=en-settings#enable_cache
*/
$config['enable_cache'] = null; // possible values: true, null (default)

/*
* The variable responsible for disabling link to the currently viewed page in the navigation path
* More: http://opensolution.org/docs/?p=en-settings#page_link_in_navigation_path
*/
$config['page_link_in_navigation_path'] = true; // possible values: true (default), null

/*
* Ability to view hidden pages if an administrator is logged in to the administration panel
* More: http://opensolution.org/docs/?p=en-settings#display_hidden_pages
*/
$config['display_hidden_pages'] = null; // possible values: true, null (default)

/*
* The option to remove unused files when a page is deleted
* More: http://opensolution.org/docs/?p=en-settings#delete_unused_files
*/
$config['delete_unused_files'] = true; // possible values: true (default), null

/*
* Store allowed extensions of images and other files
* More: http://opensolution.org/docs/?p=en-settings#allowed_not_image_extensions
*/
// Extensions of files - not images
$config['allowed_not_image_extensions'] = 'pdf|swf|doc|txt|xls|ppt|rtf|odt|ods|odp|rar|zip|7z|bz2|tar|gz|tgz|arj|docx'; // default value: 'pdf|swf|doc|txt|xls|ppt|rtf|odt|ods|odp|rar|zip|7z|bz2|tar|gz|tgz|arj|docx'
// Extensions of images
$config['allowed_image_extensions'] = 'jpg|jpeg|gif|png'; // default value: 'jpg|jpeg|gif|png'

/*
* Size and quality of uploaded files settings
* More: http://opensolution.org/docs/?p=en-settings#max_image_size
*/
// Maximum size of the long side of an image for which a thumbnail will be generated
$config['max_image_size'] = 2000; // default value: 2000
// Maximum size of the long side of an image. When the value below is exceeded, the image will be resized to the value defined below.
$config['max_dimension_of_image'] = 1100; // default value: 1100
// Quality of the image being saved and resized
$config['image_quality'] = 80; // default value: 80

/*
* Changing file name to match the name of the page to which it is added
* More: http://opensolution.org/docs/?p=en-settings#change_files_names
*/
$config['change_files_names'] = null; // possible values: true, null (default)

/*
* Default settings to some of the options
* More: http://opensolution.org/docs/?p=en-settings#default_pages_menu
*/
// Default page type. Option of the $config['pages_menus']
$config['default_pages_menu'] = 1; // default value: 1

// Default localization of a page image. Option of the $config['images_locations'] variable
$config['default_image_location'] = 1; // default value: 1

// Default size of a page image thumbnail. Option of the $config['images_thumbnails'] variable
$config['default_image_size'] = 200; // default value: 200

// Default theme. Option of the $config['themes'] variable
$config['default_theme'] = 1; // default value: 1

// Default slider setting, find more possible options in the core/libraries/quick.slider.js file
$config['default_slider_config'] = 'sAnimation:"fade",iPause:4000'; // default value: 'sAnimation:"fade",iPause:4000'

/*
* Hiding advanced options from users who don't have sufficient skills to handle full administration panel. 
* The option to hide template select, start page and other elements.
* More: http://opensolution.org/docs/?p=en-settings#disable_advanced_options
*/
$config['disable_advanced_options'] = null; // possible values: true, null (default)

/*
* Date format
* More: http://opensolution.org/docs/?p=en-settings#date_format_admin_default
*/
// Date presentation in the administration panel
$config['date_format_admin_default'] = 'Y-m-d H:i'; // default value: 'Y-m-d H:i'

/*
* Add time difference (in minutes) between local time and server time
* More: http://opensolution.org/docs/?p=en-settings#time_diff
*/
$config['time_diff'] = 0; // default value: 0

/*
* If you want the page name URL address to include a language abbreviation, also add a separator, for example _
* Once you modify this variable, edit any page in administration and save it (you don't have to change anything),
* the page address will be updated and will include language abbreviation and the separator.
* More: http://opensolution.org/docs/?p=en-settings#language_separator
*/
$config['language_separator'] = null; // default value: null

/*
* Database directory. You can change its name, to do that make sure to read the manual
* More: http://opensolution.org/docs/?p=en-settings#dir_database
*/
$config['dir_database'] = 'database/'; // default value: 'database/'
$config['database'] = $config['dir_database'].'database.db'; // default value: $config['dir_database'].'database.db'

/*
* List of extensions and classes (CSS styles) assigned to them
* More: http://opensolution.org/docs/?p=en-settings#ext_icons
*/
$config['ext_icons'] = Array( 'rar'=>'zip', 'zip'=>'zip', 'bz2'=>'zip', 'gz'=>'zip', 'fla'=>'fla', 'mp3'=>'media', 'mpeg'=>'media', 'mpe'=>'media', 'mov'=>'media', 'mid'=>'media', 'midi'=>'media', 'asf'=>'media', 'avi'=>'media', 'wav'=>'media', 'wma'=>'media', 'msg'=>'eml', 'eml'=>'eml', 'pdf'=>'pdf', 'jpg'=>'pic', 'jpeg'=>'pic', 'jpe'=>'pic', 'gif'=>'pic', 'bmp'=>'pic', 'tif'=>'pic', 'tiff'=>'pic', 'wmf'=>'pic', 'png'=>'png', 'chm'=>'chm', 'hlp'=>'chm', 'psd'=>'psd', 'swf'=>'swf', 'pps'=>'pps', 'ppt'=>'pps', 'sys'=>'sys', 'dll'=>'sys', 'txt'=>'txt', 'doc'=>'txt', 'rtf'=>'txt', 'vcf'=>'vcf', 'xls'=>'xls', 'xml'=>'xml', 'tpl'=>'web', 'html'=>'web', 'htm'=>'web', 'com'=>'exe', 'bat'=>'exe', 'exe'=>'exe' );

/*
* Note!
* Variables and code below is directed to advanced users only, we do not recommend to modify it
*/
$config['language_cookie_name'] = defined( 'CUSTOMER_PAGE' ) ? 'sLanguage' : 'sLanguageBackEnd';

if( isset( $_GET['sLanguage'] ) && strlen( $_GET['sLanguage'] ) == 2 && is_file( $config['dir_database'].'config_'.$_GET['sLanguage'].'.php' ) ){
  setCookie( $config['language_cookie_name'], $_GET['sLanguage'], time( ) + 86400 );
  $config['language'] = $_GET['sLanguage'];
  $config['current_page_id'] = true;
}
else{
  if( !empty( $_COOKIE[$config['language_cookie_name']] ) && is_file( $config['dir_database'].'config_'.$_COOKIE[$config['language_cookie_name']].'.php' ) && strlen( $_COOKIE[$config['language_cookie_name']] ) == 2 )
    $config['language'] = $_COOKIE[$config['language_cookie_name']];
  else
    $config['language'] = $config['default_language'];
}

if( !isset( $_GET['p'] ) && !isset( $config['current_page_id'] ) && defined( 'CUSTOMER_PAGE' ) ){
  $config['current_page_id'] = getPageId( );
  if( is_numeric( $config['current_page_id'] ) && isset( $_COOKIE[$config['language_cookie_name']] ) && $config['language'] != $_COOKIE[$config['language_cookie_name']] ){
    setCookie( $config['language_cookie_name'], $config['language'], time( ) + 86400 );
  }
}

require $config['dir_database'].'config_'.$config['language'].'.php';
require defined( 'CUSTOMER_PAGE' ) ? $config['dir_database'].'lang_'.$config['language'].'.php' : ( is_file( $config['dir_database'].'lang_'.$config['admin_lang'].'.php' ) ? $config['dir_database'].'lang_'.$config['admin_lang'].'.php' : $config['dir_database'].'lang_'.$config['language'].'.php' );

if( isset( $config['current_page_id'] ) && $config['current_page_id'] === true ){
  $config['current_page_id'] = $config['start_page'];
}

$config['version'] = '6.1';
$config['manual_link'] = 'http://opensolution.org/docs/?p='.( ( $config['admin_lang'] == 'pl' ) ? 'pl' : 'en' ).'-';

/*
* Verifies server settings and script's configuration
*/
if( defined( 'DEVELOPER_MODE' ) ){
  $sValue = (float) phpversion( );
  if( $sValue < '5.2' )
    exit( '<h1>Required PHP version is <u>5.2.0</u>, your version is '.phpversion( ).'</h1>' );
  elseif( !extension_loaded( 'pdo_sqlite' ) )
    exit( '<h1>Required <u>PDO</u> library with <u>pdo_sqlite</u> extension is not available</h1>' );
  elseif( !is_file( $config['database'] ) )
    exit( '<h1>Required file <u>'.$config['database'].'</u> is not available</h1>' );
  elseif( defined( 'ADMIN_PAGE' ) && ini_get( 'allow_url_fopen' ) != 1 ){
    exit( '<h1>Turn ON <u>allow_url_fopen</u> in PHP configuration (php.ini)</h1>' );
  }
}
elseif( isset( $_GET['error'] ) && $_GET['error'] == md5( $_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'] ) ){
  exit( '<h1>This page is temporary unavailable</h1>' );
}

/**
* Returns page id from the $_GET
* @return array
*/
function getPageId( ){
  global $config;
  if( !is_file( $config['dir_database'].'cache/links' ) )
    exit( '<h1>'.( defined( 'DEVELOPER_MODE' ) ? 'There is no required file: '.$config['dir_database'].'cache/links' : 'This page is temporary unavailable' ).'</h1>' );

  $config['pages_links'] = unserialize( file_get_contents( $config['dir_database'].'cache/links' ) );
  if( isset( $_GET ) && is_array( $_GET ) ){
    foreach( $_GET as $mKey => $mValue ){
      if( isset( $config['pages_links']['?'.$mKey] ) ){
        $config['language'] = $config['pages_links']['?'.$mKey][1];
        return $config['pages_links']['?'.$mKey][0];
      }
      else
        return false;
    }
    return true;
  }
} // end function getPageId
?>