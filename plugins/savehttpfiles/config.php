<?php
/**
 * FCKeditor保存远程图片插件
 * @author phplife(admin@topit.cn)
 * @license LGPL
 * @version 1.02 2009.4.18
 * @copyright  Copyright (c) 2009,  phplife (http://www.wwq.cc)
 * http://bbs.topit.cn/thread-746-1-2.html
 */
 define('ROOT_PATH', preg_replace('/includes(.*)/i', '', str_replace('\\', '/', __FILE__)));
 if (isset($_SERVER['PHP_SELF']))
{
    define('PHP_SELF', $_SERVER['PHP_SELF']);
}
else
{
    define('PHP_SELF', $_SERVER['SCRIPT_NAME']);
}

$root_path = preg_replace('/includes(.*)/i', '', PHP_SELF);
//设置图片保存绝对路径
$saveFilePath=ROOT_PATH . 'images/upload/fckautosave';
//设置显示的链接地址
$display_url=$root_path .'images/upload/fckautosave';
?>