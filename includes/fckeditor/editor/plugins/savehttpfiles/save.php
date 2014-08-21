<?php
/**
 * FCKeditor保存远程图片插件
 * @author phplife(admin@topit.cn)
 * @license LGPL
 * @version 1.02 2009.4.18
 * @copyright  Copyright (c) 2009,  LinJiong (http://www.topit.cn)
 * http://bbs.topit.cn/thread-746-1-2.html
 */
require_once './ServerXMLHTTP.php';
require_once './config.php';
set_time_limit(0);
$files=$_POST['files'];
$fileNum=count($files);
$realFileNum=0;
$imgArray=array('.gif','.jpg','.png','.jpeg','.bmp');
$typeArray=array();
$str_js ='';
for($i=0;$i<$fileNum;$i++)
{
	$type=strrchr(trim($files[$i]),".");
	if($files[$i]!='' && in_array($type,$imgArray))
	{
		$now=time();
		$filename= date('Ym').'/'.date('Ymd').'_'.$now.$type;
		$savetime=SaveHTTPFile(trim($files[$i]),$saveFilePath,$filename);
		$str_js .= 'a=a.replace("' .trim($files[$i]) . '","' . $display_url . '/' . $filename . '");';		
	}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
<!--
body {
font-size:10pt;
}
-->
</style>
<body bgcolor="#E3E3C7" leftmargin="0" rightmargin="0">
<SCRIPT LANGUAGE="JavaScript">
  var dialog = window.parent;
  var oEditor = dialog.InnerDialogLoaded();
  var FCKLang = oEditor.FCKLang;
  var xEditor = oEditor.FCK;
  var a = xEditor.GetXHTML();
  dialog.SetOkButton(true);
  function Ok(){return true;}
  <?php echo $str_js; ?>
  xEditor.SetHTML(a);
</script>
<font clor=red>文件已经保存成功<br/>
</font>
</body>