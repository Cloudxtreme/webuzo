<?php
/*
	提示: 发生 Warning: Cannot modify header information - headers already sent by (output started at config.php:1) in global.php on line 12 此类错误是由于文件保存时添加的 UTF-8 BOM 造成的, 建议不要使用记事本修改此文件, 如果站点名称不是中文的可以直接保存为 GB2312 编码避免此问题.
*/


############ 数据库配置 ############
############ DATABASE SETTINGS ############

// 数据库主机
// Database host
define(DATABASE_HOST, '[[softdbhost]]');

// 数据库用户名
// Database username
define(DATABASE_USER, '[[softdbuser]]');

// 数据库密码
// Database password
define(DATABASE_PSSWORD, '[[softdbpass]]');

// 数据库名称
// Database name
define(DATABASE_DB_NAME, '[[softdb]]');


############ 站点配置 ############
############ WEBSITE SETTINGS ############

// 网站名称
// Website name
define(SITE_NAME, '[[site_name]]');

// 微博访问路径, 请以 / 结尾
// Website visit URL, End up with /
define(BASE_URL, '[[softurl]]/');




############  下面的内容无需修改 ############
############ DON'T MODIFY ############

define(COOKERY_FRAMEWORK_DIR, './');

define(DEBUG, FALSE);

define(COOKIE_PREFIX, substr(strtoupper(md5($_SERVER['HTTP_HOST'])), 0, 6) . '_');