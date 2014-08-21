<?php
define('MSG_SDK', '18051957082');
define('MSG_CODE_MD5', '8678770e21e4e7c8901c1f7ac6398f9b');
define('MSG_SUBCODE', '2697');
define('MSG_VERFY_BEFORE','亲爱的无锡九樱电子商务会员，欢迎您注册，手机验证码为：');
define('MSG_VERFY_AFTER','。www.962068.com【樱桃屋】');

//header("Content-Type:text/html;charset=utf-8");
//echo sendCode('13661648385','1234');
//echo checkBlance();

function sendCode($phone,$code)
{
	$url = 'http://www.4001185185.com/sdk/smssdk!mt.action?sdk='
			.MSG_SDK.'&code='
			.MSG_CODE_MD5.'&pwdtype=md5&phones='.$phone.'&msg='
			.MSG_VERFY_BEFORE.$code.MSG_VERFY_AFTER.'&subcode='.MSG_SUBCODE;
	return sendRequest($url);
}

function checkBlance()
{
	$url = 'http://www.4001185185.com/sdk/smssdk!query.action?sdk='
			.MSG_SDK.'&code='
			.MSG_CODE_MD5.'&pwdtype=md5';
	return sendRequest($url);
}

function sendRequest($url)
{
	$ch = curl_init();  
	$timeout = 5;  
	curl_setopt ($ch, CURLOPT_URL, $url);  
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
	$file_contents = curl_exec($ch);  
	curl_close($ch);  
	return $file_contents; 
}
?>