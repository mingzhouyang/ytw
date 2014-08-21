<?php 
//  微博登录插件类，如有BUG请联系本人！！ 
/*===========================================================
*   name : 新浪微博
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
	var $user_id;
	var $consumer;
	var $token;
	var $sha1_method;
	var $http;
	
	
	function website(&$http)
	{
		$this->sha1_method = new OAuthSignatureMethod_HMAC_SHA1();
		$this->consumer = new OAuthConsumer(APP_KEY , APP_SECRET);
		
		$this->http = $http;
	}
	
	function requestTokenURL() { return 'http://api.t.sina.com.cn/oauth/request_token'; } 
	function authorizeURL()    { return 'http://api.t.sina.com.cn/oauth/authorize'; } 
	function authenticateURL() { return 'http://api.t.sina.com.cn/oauth/authenticate'; } 
	function accessTokenURL()  { return 'http://api.t.sina.com.cn/oauth/access_token'; } 
	
	function login($callblock , $state = '1')
	{
		$this->token = $this->getRequestToken($callblock);
		//$_SESSION['token'] = $this->token;
		
		return $this->getAuthorizeURL($this->token , false , $callblock);
	}
	
	//  取回 用户信息---------------  暂时不允许 查找别人的资料
	function get_user_info()
	{
		$par = array();
		if(!$user_name) $par['user_id'] = $this->user_id;
		return $this->transferred(json_decode($this->oAuthRequest('http://api.t.sina.com.cn/users/show.json' , 'GET' , $par) , true));
	}
	
	function transferred($user_info)
	{
		$arr = array();
		if(!empty($user_info['error_code']))
		{
			$arr['error'] = $user_info['error_code'];
			$arr['message'] = $user_info['error'];
			return $arr;
		}
		
		$arr['user_id'] = $user_info['id'];
		$arr['name'] = $user_info['name'];
		$arr['location'] = $user_info['location'];
		$arr['sex']  = $user_info['gender'] == 'm' ? '1' : '0';
		$arr['rank_id'] = RANK_ID;
		$arr['img'] = $user_info['profile_image_url'];
		$arr['user_info'] = $user_info;
		return $arr;
	}
	
	
	
	
	function getAuthorizeURL($token, $sign_in_with_Weibo = TRUE , $url) { 
        if (is_array($token)) { 
            $to = $token['oauth_token']; 
        }
		
        if (empty($sign_in_with_Weibo)) { 
            return $this->authorizeURL() . "?oauth_token={$to}&oauth_callback=" . urlencode($url.'&ken='.$token['oauth_token'].'&ser='.$token['oauth_token_secret']); 
        } else { 
            return $this->authenticateURL() . "?oauth_token={$to}&oauth_callback=". urlencode($url.'&ken='.$token['oauth_token'].'&ser='.$token['oauth_token_secret']); 
        } 
    }
	
	function getAccessToken($oauth_verifier = FALSE, $oauth_token = false) {
        $this->token = new OAuthConsumer($_REQUEST['ken'], $_REQUEST['ser']);
		
		$_SESSION['token'] = '';
		$parameters = array();
        $parameters['oauth_verifier'] = $_REQUEST['oauth_verifier'];
		
        $request = $this->oAuthRequest($this->accessTokenURL(), 'GET', $parameters); 
        $token = OAuthUtil::parse_parameters($request); 
        $this->token = new OAuthConsumer($token['oauth_token'], $token['oauth_token_secret']); 
        return $token;
    }
	
	
	function setAccessToken($token)
	{
		$this->token = new OAuthConsumer($token['oauth_token'], $token['oauth_token_secret']);
		$this->user_id = $token['user_id'];
		return $this->token;
	}
	
	
	
	function getRequestToken($oauth_callback = NULL) {
        $parameters = array();
        if (!empty($oauth_callback)) {
            $parameters['oauth_callback'] = $oauth_callback;
		}
        $request = $this->oAuthRequest($this->requestTokenURL(), 'GET', $parameters); 
        $token = OAuthUtil::parse_parameters($request); 
        $this->token = new OAuthConsumer($token['oauth_token'], $token['oauth_token_secret']); 
        return $token;
    }
	
	function oAuthRequest($url, $method, $parameters , $multi = false) { 
		if (strrpos($url, 'http://') !== 0 && strrpos($url, 'http://') !== 0) { 
            $url = "{$this->host}{$url}.{$this->format}"; 
        }
        // echo $url ; 
        $request = OAuthRequest::from_consumer_and_token($this->consumer, $this->token, $method, $url, $parameters); 
		
		
		
		//print_r($request);
        $request->sign_request($this->sha1_method, $this->consumer, $this->token);
		//print_r( $this->consumer);
        switch ($method) { 
        case 'GET': 
            //echo $request->to_url()
            return $this->http->http($request->to_url(), 'GET'); 
        default: 
            return $this->http->http($request->get_normalized_http_url(), $method, $request->to_postdata($multi) , $multi ); 
        }
	}
}

/** 
 * @ignore 
 */ 
class OAuthUtil { 

	public static $boundary = '';

    public static function urlencode_rfc3986($input) { 
        if (is_array($input)) { 
            return array_map(array('OAuthUtil', 'urlencode_rfc3986'), $input); 
        } else if (is_scalar($input)) { 
            return str_replace( 
                '+', 
                ' ', 
                str_replace('%7E', '~', rawurlencode($input)) 
            ); 
        } else { 
            return ''; 
        } 
    } 


    // This decode function isn't taking into consideration the above 
    // modifications to the encoding process. However, this method doesn't 
    // seem to be used anywhere so leaving it as is. 
    public static function urldecode_rfc3986($string) { 
        return urldecode($string); 
    } 


    public static function parse_parameters( $input ) { 
        if (!isset($input) || !$input) return array(); 

        $pairs = explode('&', $input); 

        $parsed_parameters = array(); 
        foreach ($pairs as $pair) { 
            $split = explode('=', $pair, 2); 
            $parameter = OAuthUtil::urldecode_rfc3986($split[0]); 
            $value = isset($split[1]) ? OAuthUtil::urldecode_rfc3986($split[1]) : ''; 

            if (isset($parsed_parameters[$parameter])) { 
                // We have already recieved parameter(s) with this name, so add to the list 
                // of parameters with this name 

                if (is_scalar($parsed_parameters[$parameter])) { 
                    // This is the first duplicate, so transform scalar (string) into an array 
                    // so we can add the duplicates 
                    $parsed_parameters[$parameter] = array($parsed_parameters[$parameter]); 
                } 

                $parsed_parameters[$parameter][] = $value; 
            } else { 
                $parsed_parameters[$parameter] = $value; 
            } 
        } 
        return $parsed_parameters; 
    } 
    
    public static function build_http_query($params) { 
        if (!$params) return ''; 

        // Urlencode both keys and values 
        $keys = OAuthUtil::urlencode_rfc3986(array_keys($params)); 
        $values = OAuthUtil::urlencode_rfc3986(array_values($params)); 
        $params = array_combine($keys, $values); 

        // Parameters are sorted by name, using lexicographical byte value ordering. 
        // Ref: Spec: 9.1.1 (1) 
        uksort($params, 'strcmp'); 

        $pairs = array(); 
        foreach ($params as $parameter => $value) { 
            if (is_array($value)) { 
                // If two or more parameters share the same name, they are sorted by their value 
                // Ref: Spec: 9.1.1 (1) 
                natsort($value); 
                foreach ($value as $duplicate_value) { 
                    $pairs[] = $parameter . '=' . $duplicate_value; 
                } 
            } else { 
                $pairs[] = $parameter . '=' . $value; 
            } 
        } 
        // For each parameter, the name is separated from the corresponding value by an '=' character (ASCII code 61) 
        // Each name-value pair is separated by an '&' character (ASCII code 38) 
        return implode('&', $pairs); 
    } 
    
    
}

/** 
 * @ignore 
 */ 
class OAuthRequest { 
    private $parameters; 
    private $http_method; 
    private $http_url; 
    // for debug purposes 
    public $base_string; 
    public static $version = '1.0a'; 
    public static $POST_INPUT = 'php://input'; 

    function __construct($http_method, $http_url, $parameters=NULL) { 
        @$parameters or $parameters = array(); 
        $this->parameters = $parameters; 
        $this->http_method = $http_method; 
        $this->http_url = $http_url; 
    } 
	
    /** 
     * pretty much a helper function to set up the request 
     */ 
    public static function from_consumer_and_token($consumer, $token, $http_method, $http_url, $parameters=NULL) 
	{
        @$parameters or $parameters = array();
        $defaults = array("oauth_version" => OAuthRequest::$version, 
            "oauth_nonce" => OAuthRequest::generate_nonce(), 
            "oauth_timestamp" => OAuthRequest::generate_timestamp(), 
            "oauth_consumer_key" => $consumer->key); 
        if ($token) 
            $defaults['oauth_token'] = $token->key; 

        $parameters = array_merge($defaults, $parameters); 
		
        return new OAuthRequest($http_method, $http_url, $parameters); 
    }

    public function set_parameter($name, $value, $allow_duplicates = true) { 
        if ($allow_duplicates && isset($this->parameters[$name])) { 
            // We have already added parameter(s) with this name, so add to the list 
            if (is_scalar($this->parameters[$name])) { 
                // This is the first duplicate, so transform scalar (string) 
                // into an array so we can add the duplicates 
                $this->parameters[$name] = array($this->parameters[$name]); 
            } 

            $this->parameters[$name][] = $value; 
        } else { 
            $this->parameters[$name] = $value; 
        } 
    } 
    /** 
     * The request parameters, sorted and concatenated into a normalized string. 
     * @return string 
     */ 
    public function get_signable_parameters() { 
        // Grab all parameters 
        $params = $this->parameters; 
        
        // remove pic 
        if (isset($params['pic'])) { 
            unset($params['pic']); 
        }
        
          if (isset($params['image'])) 
         { 
            unset($params['image']); 
        }

        // Remove oauth_signature if present 
        // Ref: Spec: 9.1.1 ("The oauth_signature parameter MUST be excluded.") 
        if (isset($params['oauth_signature'])) { 
            unset($params['oauth_signature']); 
        } 

        return OAuthUtil::build_http_query($params); 
    } 

    /** 
     * Returns the base string of this request 
     * 
     * The base string defined as the method, the url 
     * and the parameters (normalized), each urlencoded 
     * and the concated with &. 
     */ 
    public function get_signature_base_string() { 
        $parts = array( 
            $this->get_normalized_http_method(), 
            $this->get_normalized_http_url(), 
            $this->get_signable_parameters() 
        ); 
        
        //print_r( $parts );

        $parts = OAuthUtil::urlencode_rfc3986($parts); 

        return implode('&', $parts); 
    } 

    /** 
     * just uppercases the http method 
     */ 
    public function get_normalized_http_method() { 
        return strtoupper($this->http_method); 
    } 

    /** 
     * parses the url and rebuilds it to be 
     * scheme://host/path 
     */ 
    public function get_normalized_http_url() { 
        $parts = parse_url($this->http_url); 

        $port = @$parts['port']; 
        $scheme = $parts['scheme']; 
        $host = $parts['host']; 
        $path = @$parts['path']; 

        $port or $port = ($scheme == 'https') ? '443' : '80'; 

        if (($scheme == 'https' && $port != '443') 
            || ($scheme == 'http' && $port != '80')) { 
                $host = "$host:$port"; 
            } 
        return "$scheme://$host$path"; 
    } 

    /** 
     * builds a url usable for a GET request 
     */ 
    public function to_url() { 
        $post_data = $this->to_postdata(); 
        $out = $this->get_normalized_http_url(); 
        if ($post_data) { 
            $out .= '?'.$post_data; 
        } 
        return $out; 
    } 

    /** 
     * builds the data one would send in a POST request 
     */ 
    public function to_postdata( $multi = false ) {
    //echo "multi=" . $multi . '`';
        return OAuthUtil::build_http_query($this->parameters); 
    } 

    


    public function sign_request($signature_method, $consumer, $token) { 
	
        $this->set_parameter(  "oauth_signature_method",  $signature_method->get_name(),  false ); 
		$signature = $this->build_signature($signature_method, $consumer, $token); 
		$this->set_parameter("oauth_signature", $signature, false); 
    } 

    public function build_signature($signature_method, $consumer, $token) { 
        $signature = $signature_method->build_signature($this, $consumer, $token); 
        return $signature; 
    } 

    /** 
     * util function: current timestamp 
     */ 
    private static function generate_timestamp() { 
        //return 1273566716;
		//echo date("y-m-d H:i:s");
		return time(); 
    } 

    /** 
     * util function: current nonce 
     */ 
    private static function generate_nonce() { 
        //return '462d316f6f40c40a9e0eef1b009f37fa';
		$mt = microtime(); 
        $rand = mt_rand(); 
        return md5($mt . $rand); // md5s look nicer than numbers 
    }
} 

class OAuthConsumer { 
    public $key; 
    public $secret; 

    function __construct($key, $secret) { 
        $this->key = $key; 
        $this->secret = $secret; 
    } 

    function __toString() { 
        return "OAuthConsumer[key=$this->key,secret=$this->secret]"; 
    }
}
/** 
 * @ignore 
 */ 
class OAuthSignatureMethod { 
    public function check_signature(&$request, $consumer, $token, $signature) { 
        $built = $this->build_signature($request, $consumer, $token); 
        return $built == $signature; 
    }
}

class OAuthSignatureMethod_HMAC_SHA1 extends OAuthSignatureMethod { 
    function get_name() { 
        return "HMAC-SHA1"; 
    }
    public function build_signature($request, $consumer, $token) { 
        $base_string = $request->get_signature_base_string(); 

		//print_r( $base_string );
        $request->base_string = $base_string; 

        $key_parts = array( 
            $consumer->secret, 
            ($token) ? $token->secret : "" 
        ); 

        //print_r( $key_parts );
		$key_parts = OAuthUtil::urlencode_rfc3986($key_parts); 
        

		$key = implode('&', $key_parts); 

        return base64_encode(hash_hmac('sha1', $base_string, $key, true)); 
    } 
} 

?>