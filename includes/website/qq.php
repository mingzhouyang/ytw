<?php 
//  QQ登录接口类，如有BUG请联系本人！！ 
/*===========================================================
*   name : QQ
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
	public $app_id;   //申请的 APP ID
	public $key;  // 申请的 KEY
	public $scope = 'get_user_info,add_share,list_album,add_album,upload_pic,add_topic,add_one_blog,add_weibo';  // 微博开放的所有接口
	public $http;
	public $token = array();
	function __construct(&$http)
	{
		$this->app_id = APP_KEY;
		$this->key = APP_SECRET;
		$this->http = $http;
	}
	
	function login($callback)
	{
		return $this->GetOAuthUrl($callback);
	}
	
	function getAccessToken()
	{
		$token_url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&"
            . "client_id=" . $this->app_id. "&redirect_uri=" . urlencode($_REQUEST['callblock'])
            . "&client_secret=" . $this->key . "&code=" . $_REQUEST["code"];
		$response = $this->http->http($token_url , 'GET');
		
		if (strpos($response, "callback") !== false)
        {
            $lpos = strpos($response, "(");
            $rpos = strrpos($response, ")");
            $response  = substr($response, $lpos + 1, $rpos - $lpos -1);
            $msg = json_decode($response);
			die('登录失败:error:'.print_r($msg , true));
        }
		if(!$response)
		{
			die('获取access_token失败<br />'.$response);
		}
		$params = array();
        parse_str($response, $params);
		$this->token['token'] = $params["access_token"];
		
		$graph_url = "https://graph.qq.com/oauth2.0/me?access_token=" . $this->token['token'];
		
		
		
		$str = $this->get($graph_url);
		if($str['error'])
		{
			die(print_r($str['message'] , true));
		}
		$user = $str;
		$this->token['token_secret'] = $user['openid'];
		return $this->token;
	}
	function setAccessToken($token)
	{
		$this->token = $token;
	}
	
	function get_user_info()
	{
		$get_user_info = "https://graph.qq.com/user/get_user_info?"
			. "access_token=" . $this->token['token']
			. "&oauth_consumer_key=" . $this->app_id
			. "&openid=" . $this->token['token_secret']
			. "&format=json";
		
		$info = $this->get($get_user_info);
		
		if(!empty($info['error']))
			return $info;
		
		$info['name'] = $info['nickname'];
		$info['sex'] = $info['gender'] == '男' ? '1' : '0';
		$info['user_id'] = $this->token['token_secret'];
		$info['img'] = $info['figureurl_2'];
		$info['rank_id'] = RANK_ID;
		return $info;
	}
	
	
	function get($url)
	{
		$msg = array();
		$response = $this->http->http($url , 'GET');
		
		if (strpos($response, "callback") !== false)
        {
            $lpos = strpos($response, "(");
            $rpos = strrpos($response, ")");
            $response  = substr($response, $lpos + 1, $rpos - $lpos -1);
            $msg = json_decode($response , true);
			$msg['error'] = $msg['ret'];
			$msg['message']['error_description'] = isset($msg['error_description']) ? $msg['error_description'] : '';
			$msg['message']['msg'] = isset($msg['msg']) ? $msg['msg'] : '';
			return $msg;
        }
		
		$ret = json_decode($response , true);
		if($ret['ret'])
		{
			$msg['error'] = $ret['ret'];
			$msg['message']['error_description'] = isset($msg['error_description']) ? $msg['error_description'] : '';
			$msg['message']['msg'] = isset($msg['msg']) ? $msg['msg'] : '';
			return $msg;
		}
		return $ret;
	}
	
	function GetOAuthUrl($callback)
	{
		$state = md5(uniqid(rand(), TRUE)); //CSRF protection
		$login_url = 'https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id= '. 
        			 $this->app_id . '&redirect_uri=' . urlencode($callback) .
        			 //'&state=' . $state . 
        			 '&scope='.$this->scope;
		return $login_url;
	}
}
?>