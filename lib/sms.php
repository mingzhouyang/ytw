<?php

session_start();

header("Content-type:text/html; charset=UTF-8");


define('MSG_SDK', '18051957082');
define('MSG_CODE_MD5', '8678770e21e4e7c8901c1f7ac6398f9b');
define('MSG_SUBCODE', '2697');
define('MSG_VERFY_BEFORE','亲爱的樱淘屋会员，欢迎您注册，手机验证码为：');
define('MSG_VERFY_AFTER','。www.962068.com【樱桃屋】');

//header("Content-Type:text/html;charset=utf-8");
//echo sendCode('13661648385','1234');
//echo checkBlance();

$mobile = $_POST['mobile'];


if($_GET['act']=='check'){
	$mobile_code = $_POST['mobile_code'];
	if($mobile!=$_SESSION['mobile'] or $mobile_code!=$_SESSION['mobile_code']){
		exit(json_encode(array('msg'=>'手机验证码输入错误。')));	
	}else{
		exit(json_encode(array('code'=>'2')));	
	}
}

if($_GET['act']=='send'){
	if(empty($mobile)){
		exit(json_encode(array('msg'=>'手机号码不能为空')));
	}
	
	$preg='/^1[0-9]{10}$/';//简单的方法
	if(!preg_match($preg,$mobile)) {
		exit(json_encode(array('msg'=>'手机号码格式不正确')));
	 }	
	
	$mobile_code = random(4,1);

	//exit(json_encode(array('msg'=>strtotime( read_file($mobile))."\r\n".(time()-60) )));
	if(isset($_SESSION['mobile']) && $_SESSION['mobile']){
		//exit(json_encode(array('msg'=> read_file($mobile) )));
		if(strtotime(read_file($mobile))>(time()-60)){
			exit(json_encode(array('msg'=>'获取验证码太过频繁，一分钟之内只能获取一次。')));	
		}
	}
	
	$get = sendCode($mobile,$mobile_code);
	
	write_file($mobile,$get."\r\n".date("Y-m-d H:i:s"));

	if($get){
		$_SESSION['mobile']=$mobile;
		$_SESSION['mobile_code']=$mobile_code;	
		exit(json_encode(array('code'=>2)));	
	}else{
		exit(json_encode(array('msg'=>'手机验证码发送失败。')));	
	}
}



function sendCode($phone,$code)
{
	$url = 'http://www.4001185185.com/sdk/smssdk!mt.action?sdk='
			.MSG_SDK.'&code='
			.MSG_CODE_MD5.'&pwdtype=md5&phones='.$phone.'&msg='
			.MSG_VERFY_BEFORE.$code.MSG_VERFY_AFTER.'&subcode='.MSG_SUBCODE;
	return sendRequest($url);
	//return 'true';
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


function Post($curlPost,$url){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
		$return_str = curl_exec($curl);
		curl_close($curl);
		return $return_str;
}
function xml_to_array($xml){
	$reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
	if(preg_match_all($reg, $xml, $matches)){
		$count = count($matches[0]);
		for($i = 0; $i < $count; $i++){
		$subxml= $matches[2][$i];
		$key = $matches[1][$i];
			if(preg_match( $reg, $subxml )){
				$arr[$key] = xml_to_array( $subxml );
			}else{
				$arr[$key] = $subxml;
			}
		}
	}
	return $arr;
}
function random($length = 6 , $numeric = 0) {
	PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	if($numeric) {
		$hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	} else {
		$hash = '';
		$chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
		$max = strlen($chars) - 1;
		for($i = 0; $i < $length; $i++) {
			$hash .= $chars[mt_rand(0, $max)];
		}
	}
	return $hash;
}
function write_file($file_name,$content){
	mkdirs(date('Ymd'));
	$filename = date('Ymd').'/'.$file_name.'.log';
	$Ts=fopen($filename,"a+");
	fputs($Ts,"\r\n".$content);
	fclose($Ts);
}
function mkdirs($dir, $mode = 0777){
	if (is_dir($dir) || @mkdir($dir, $mode)) return TRUE;
	if (!self::mkdirs(dirname($dir), $mode)) return FALSE;
	return @mkdir($dir, $mode);
}
function read_file($file_name) {
	$content = '';
	$filename = date('Ymd').'/'.$file_name.'.log';
	if(function_exists('file_get_contents')) {
		@$content = file_get_contents($filename);
	} else {
		if(@$fp = fopen($filename, 'r')) {
			@$content = fread($fp, filesize($filename));
			@fclose($fp);
		}
	}
	$content = explode("\r\n",$content);
	return end($content);
}



?>
