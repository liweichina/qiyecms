<?php
//require_once '../Public/Config/config.php';	//公共配置
$sconfig = array(										//私有配置
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'qiyecms', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'qy_', // 数据库表前缀
	'DEFAULT_THEME'         => 'Default',	// 默认模板主题名称
	'TMPL_DETECT_THEME'     => true,       // 自动侦测模板主题
	'APP_STATUS' => 'debug', //应用调试模式状态
	'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
	'TRACE_PAGE_TABS'=>array(
        'base'=>'基本',
        'file'=>'文件',
        'think'=>'流程',
        'error'=>'错误',
        'sql'=>'SQL',
        'debug'=>'调试',
        'user'=>'用户'
    ),
	'APP_FILE_CASE'         => true,   // 是否检查文件的大小写 对Windows平台有效
	'SHOW_ERROR_MSG'        => true,    // 显示错误信息
    'TRACE_EXCEPTION'       => true,   // TRACE错误信息是否抛异常 针对trace方法 
    //'TMPL_L_DELIM'=>'<{',		//模板前缀
    //'TMPL_R_DELIM'=>'}>',		//模板后缀
	
);
//return array_merge（$pconfig,$sconfig);
return $sconfig;
?>