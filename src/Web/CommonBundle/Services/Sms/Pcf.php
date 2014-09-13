<?php

namespace Web\CommonBundle\Services\Sms;

class Pcf {
	
	private $host = 'http://sms.106jiekou.com/gbk/sms.aspx';
	
	private $account;//用户名
	
	private $password;//密码
	
	private $cellphone = null;//接受对象的手机号码
	
	//短消息内容的模板，工信部要求短信内容要有模板
	private $content = '您的验证码是：%s。请不要把验证码泄露给其他人。如非本人操作，可不用理会！';
	
	private $capcha = null;//验证码的内容
	
	function __construct($host,$account,$password){
		
		$this->host = $host;
		$this->account = $account;
		$this->password = $password;
		
	}//function __construct() end
	
	
	/**
	 * 设置收件人的手机号码
	 * @param email $mailAddress
	 */
	public function setCellphone($cellphone){
		$this->cellphone = $cellphone;
		return $this;
 	}//function setMailForm() end
 	
 	
 	/**
 	 * 设置短消息模板的内容，如果需要改变短消息的模板
 	 * @param string $content
 	 */
	public function setContent($content){
 		$this->content = $content;
 		return $this;
 	}
 	
 	/**
 	 * 设置短消息的验证码
 	 * @param string $capcha
 	 */
 	public function setCapcha($capcha){
 		$this->capcha = $capcha;
 		return $this;
 	}
	
	
	function send(){
		
		//header这句话不能省略，要不然返回的错误代码就是108
		header("Content-Type: text/html; charset=utf-8");
		
		//第一步：拼接得到GET方式的URL字符串
		$this->content = sprintf($this->content,$this->capcha);//短信模板和验证码内容相混合
		$this->content = rawurlencode($this->content);//编码
		$data = sprintf("account=%s&password=%s&mobile=%s&content=%s",$this->account,$this->password,$this->cellphone,$this->content);
		
		
		//第二步：使用官方文档中的curl的方法来发送数据
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $this->host);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_NOBODY, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		
		$statusCode = curl_exec($curl);
		curl_close($curl);
		
		if(intval($statusCode)!=100){
			$message = sprintf("发送短消息失败，短信接口返回的代码为：%s",$statusCode);
			throw new \Exception($message);
		}
		
	}//function send() end
	
	
	
	
	
	

	
	
	
	
	
	
	
}