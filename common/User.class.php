<?php  
session_start();
require_once('ezSQL/init.php');
class User{
	var $db;
	var $name;
	var $token;

	/**
	*构造函数
	**/
	function __construct()
    {
        global $db;
        $this->db = $db;
        $this->name = isset($_SESSION['name'])?$_SESSION['name']:'';
        $this->token = isset($_SESSION['token'])?$_SESSION['token']:'';
    }

    /**
    *判断是否登陆,使用session和cookie
    **/
    function isLogin(){
    	$session_name = $this->name;
    	$session_token = sha1($this->token);
    	$cookie_name = $_COOKIE['name'];
    	$cookie_token = sha1($_COOKIE['token']);
    	if($session_name==$cookie_name && $session_token==$cookie_token){
    		$db = $this->db;
	    	$sql = "select count(Id) from youzi_user where mobile='".
	    			$db->escape($name)."' and password='".
					$db->escape($token)."'";
			if($db->get_var($sql)){
				return True;
			} else {
				return False;
			}
    	} else {
    		return False;
    	}
    }

    /**
	*判断是否登陆,使用账号和密码
	*$name->手机号码,$token->半密码
    **/
    function checkLogin($name,$token){
    	$db = $this->db;
    	$token = sha1($token);
    	$sql = "select count(Id) from youzi_user where mobile='".
    			$db->escape($name)."' and password='".
				$db->escape($token)."'";
		if($db->get_var($sql)){
			return True;
		} else {
			return False;
		}	
    }

}

?>