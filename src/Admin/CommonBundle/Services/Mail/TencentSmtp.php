<?php

namespace Web\CommonBundle\Services\Mail;


use Zend\Mail\Headers as SmtpHeaders;
use Zend\Mail\Header\ContentType as  SmtpHeaderContentType;
use Zend\Mail\Message as SmtpMessage;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions as SmtpOptions;


class TencentSmtp {
	
	private $host;//地址
	
	private $port;//端口
	
	private $username;//用户名
	
	private $password;//密码
	
	private $mailFrom = 'service@zhongtoushe.cn';//发件人
	
	private $mailTo = null;//收件人
	
	private $subject = null;//邮件主题
	
	private $body = null;//邮件内容
	
	function __construct($host,$port,$username,$password){
		
		$this->host = $host;
		$this->port = $port;
		$this->username = $username;
		$this->password = $password;
		
	}//function __construct() end
	
	/**
	 * 设置发件人
	 * @param email $mailAddress
	 */
	
 	public function setMailForm($mailAddress){
		$this->mailFrom = $mailAddress;
		return $this;
 	}//function setMailForm() end
 	
 	
 	/**
 	 * 设置收件人
 	 * @param email $mailAddress
 	 */
 	public function setMailTo($mailAddress){
 		$this->mailTo = $mailAddress;
 		return $this;
 	}
	
 	/**
 	 * 设置邮件主题
 	 * @param string $subject
 	 */
 	public function setSubject($subject){
 		$this->subject = $subject;
 		return $this;
 	}
 	
 	/**
 	 * 设置邮件内容
 	 * @param string $body
 	 */
 	public function setBody($body){
 		$this->body = $body;
 		return $this;
 	}
	
	
	function send(){
		
		//第一步： 设置相关的headers
		//1.设置邮件的Content-Type,要不然网站的消息内容里面的html标签会被当做纯文本处理
		$smtpHeaderContentType = new SmtpHeaderContentType();
		$smtpHeaderContentType->setType('text/html');
		
		//2.设置编码集并添加Content-Type
		$headers = new SmtpHeaders();
		$headers->setEncoding('utf-8');
		$headers->addHeader($smtpHeaderContentType);
		
		//第二步：设置消息的相关
		$message = new SmtpMessage();
		$message->setHeaders($headers);
		
		$message->addTo($this->mailTo)//发送给谁
				->addFrom($this->mailFrom)//发件人是谁，然后发件人的地址必须跟下面ConnectionClass的Username一样
				->setSubject($this->subject)//邮件的标题
				->setBody($this->body);//邮件的内容
				
		
		//第三步：设置Smtp的相关链接参数
		$smtpOptions =  new SmtpOptions();
		$smtpOptions->setHost($this->host)//服务器的地址
					->setPort($this->port)//服务器的接口
					->setConnectionClass('login')//链接使用的类
					->setConnectionConfig(//链接使用的配置
							array(
									'username' => $this->username,
									'password' => $this->password,
									'ssl'=>'ssl'
							)
					);
			
		
		//第四步：加载配置，发送消息
		$smtpTransport = new SmtpTransport();
		$smtpTransport->setOptions($smtpOptions);//加载配置
		$smtpTransport->send($message);//发送消息
		
	}
	
	
	
	
	
	

	
	
	
	
	
	
	
}