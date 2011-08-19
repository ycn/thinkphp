<?php
if (!defined('THINK_PATH')) exit();
return  array(

    /* 项目设定 */
    'APP_DEBUG'				=> true,
    'APP_GROUP_LIST'        => 'Home,Admin,User',

    /* Cookie设置 */
    'COOKIE_EXPIRE'         => 86400, // 1 day
    'COOKIE_DOMAIN'         => '.mydomain.com',
    'COOKIE_PATH'           => '/',
    'COOKIE_PREFIX'         => 'altiny_',

    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',
	'DB_HOST'               => 'localhost',
	'DB_NAME'               => 'altiny',
	'DB_USER'               => 'root',
	'DB_PWD'                => 'root',
	'DB_PORT'               => 3306,
	'DB_PREFIX'             => 'altiny_',
    'DB_DEPLOY_TYPE'        => 0,
    'DB_RW_SEPARATE'        => false,

    /* 静态缓存设置 */
    'HTML_CACHE_ON'			=> false,
    'HTML_CACHE_TIME'		=> 60,

    /* 模板引擎设置 */
    'TMPL_ACTION_ERROR'     => 'Public:error',
    'TMPL_ACTION_SUCCESS'   => 'Public:success',
	'TMPL_EXCEPTION_FILE'	=> TMPL_DIR.'/default/Exception.tpl.php',

    /* 表单令牌验证 */
    'TOKEN_ON'              => true,

    /* URL设置 */
    'URL_ROUTER_ON'         => true,
    'URL_MODEL'      		=> 2,
    'URL_HTML_SUFFIX'       => '.html',

	/* 站点设置 */
	'STATIC_SERVER'			=> 'http://s.mydomain.com',
	'STATIC_VERSION'		=> '1',
	'SITE_DOMAIN'			=> 'mydomain.com',
	'SITE_NAME'				=> 'Altiny',
	'SITE_VERSION'			=> '0.1',
	'SITE_TITLE'			=> 'Altiny',
);
?>