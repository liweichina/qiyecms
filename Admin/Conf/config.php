<?php
require_once '../Public/Config/config.php';	//公共配置
$sconfig = array(										//私有配置
	//'配置项'=>'配置值'
	'APP_STATUS' => 'debug', //应用调试模式状态
	'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
	'APP_FILE_CASE'         => true,   // 是否检查文件的大小写 对Windows平台有效
	'SHOW_ERROR_MSG'        => true,    // 显示错误信息
    'TRACE_EXCEPTION'       => true,   // TRACE错误信息是否抛异常 针对trace方法 
	
);
return array_merge（$pconfig,$sconfig);
?>