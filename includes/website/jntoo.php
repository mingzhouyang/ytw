<?php 
//    第三方登录插件调用，如有BUG请联系作者！！ 
/**
*    ============================================================================
*    版权所有 摩尔互动 
*    网站第三方登录插件
*	 作者： Pohat 
*    QQ：1520763000
*    Email：hi@mooer.cn
*    尊重作者--------------------------------------------------------------
*    使用；不允许对程序代码以任何形式任何目的的再发布。
**/



function & website($type)
{
	if(!file_exists(ROOT_PATH . 'includes/website/config/'.$type.'_config.php') || !file_exists(ROOT_PATH . 'includes/website/'.$type.'.php'))
	{
		return false;
	}
	
	include_once(ROOT_PATH . 'includes/website/config/'.$type.'_config.php');  //  装载第三方申请的东西
	if(!defined('RANK_ID'))  //  尚未安装
	{
		return false;
	}
	
	include_once(ROOT_PATH . 'includes/website/'.$type.'.php');
	include_once(ROOT_PATH . 'includes/cls_http.php');
	$http = new cls_http;
	return new website($http);
}

?>