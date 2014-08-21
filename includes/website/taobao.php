<?php 
//  淘宝登录插件如有BUG请联系本人！！ 
/*===========================================================
*   name : 淘宝
*   author : Pohat
*   QQ : 1520763000
*   E-mail : hi@mooer.cn
*   VERSION : 1.2
*   DATE : 2012-1-7
*   尊重作者,保留版权信息
*   版权所有 Mooer.cn
*   使用；不允许对程序代码以任何形式任何目的的再发布。
**/



class website
{
	var $app_key = '';
	var $app_sess = '';
	
	var $token = '';
	
	var $http;  // HTTP 对象
	
	var $parset = array();  //提交时 附加的参数;
	var $v = '2.0';   //  版本号
	
	
	var $secretKey;
	
	// 构造 函数
	
	function __construct(&$http)
	{
		$this->app_key = APP_KEY;
		$this->app_sess = APP_SECRET;
		//$this->token = $token;
		$this->http = $http;
		$this->parset = array('client_id' => APP_KEY , 'client_secret' => APP_SECRET);
	}
	
	public function login($retUrl , $state = '1')
	{
		$url = urlencode($retUrl.'&url='.$retUrl);
		return 'https://oauth.taobao.com/authorize?response_type=code&client_id='.$this->app_key.'&redirect_uri='.$url.'&state='.$state;
	}
	
	function getAccessToken()
	{
		$code = $_REQUEST['code'];
		$par['grant_type'] = 'authorization_code';
		$par['code'] = $code;
		$par['redirect_uri'] = $_REQUEST['url'];
		return $this->post('https://oauth.taobao.com/token' , $par);
	}
	
	function setAccessToken($access_token) // 整个数组 放入   getToken 返回的  // 之后就可以 读取API信息了
	{
		$this->parset = array_merge($this->parset , $access_token);
		
		$this->token = $access_token['access_token'];
		$this->secretKey = $access_token['access_token'];
	}
	
	function get_user_info()  // 不传值 代表 默认为登录用户
	{
		$sys['app_key'] = $this->app_key;
		$sys['v'] = $this->v;
		$sys['format'] = 'json';
		$sys['sign_method'] = 'md5';
		$sys['method'] = 'taobao.user.get';
		
		$sys['timestamp'] = local_date('Y-m-d H:i:s');
		$sys['partner_id'] = 'top-sdk-php-20111220';
		$sys['session'] = $this->token;
		$msg['fields'] = 'user_id,uid,nick,sex,buyer_credit,seller_credit,location,created,last_visit,birthday,type,status,alipay_no,alipay_account,alipay_account,email,consumer_protection,alipay_bind';
		
		$sys['sign'] = $this->generateSign(array_merge($msg , $sys));
		
		$requestUrl = 'http://gw.api.taobao.com/router/rest?'.http_build_query($sys);
		$ret = $this->http->http($requestUrl , 'POST' , $msg);
		
		return $this->transferred(json_decode($ret , true));
	}
	
	function transferred($user_info)
	{
		$arr = array();
		if(isset($user_info['error_response']))
		{
			$arr['error'] = $user_info['error_response']['code'];
			$arr['message']['msg'] = $user_info['error_response']['msg'];
			$arr['message']['sub_code'] = $user_info['error_response']['sub_code'];
			$arr['message']['sub_msg'] = $user_info['error_response']['sub_msg'];
			return $arr;
		}
		
		
		$user_info = $user_info['user_get_response']['user'];
		
		$arr['user_id'] = $user_info['user_id'];
		$arr['name']  = $user_info['nick'];
		$arr['location'] = (isset($user_info['location']['state']) ? $user_info['location']['state'] : '' ) .' '. (isset($user_info['location']['city']) ? $user_info['location']['city'] : '');
		$arr['sex'] = (isset($user_info['sex']) ? ($user_info['sex'] == 'm' ? '1' : '0') : 0);
		$arr['rank_id'] = RANK_ID;
		$arr['user_info'] = $user_info;
		return $arr;
	}
	
	function get($url , $parse = array())
	{
		$s = array_merge($this->parset , $parse);
		//$s = $parse;
		$ret = $this->http->http($url , 'GET' , $s);
		$arr = json_decode($ret , 1);
		return $arr;
	}
	
	function post($url , $parse = array())
	{
		$s = array_merge( $this->parset  ,  $parse);
		$ret = $this->http->http($url , 'POST' , $s);
		$arr = json_decode($ret , 1);
		return $arr;
	}
	
	
	
	function generateSign($params)   
	{
		ksort($params);
		$stringToBeSigned = $this->app_sess;
		foreach ($params as $k => $v)
		{
			if("@" != substr($v, 0, 1))
			{
				$stringToBeSigned .= "$k$v";
			}
		}
		$stringToBeSigned .= $this->app_sess;
		return strtoupper(md5($stringToBeSigned));
	}
	

}

?>