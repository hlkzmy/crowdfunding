<?php

namespace Web\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;




class DefaultController extends Controller
{
	
	
	
	public function exmailAction()
	{
		try{
			
			$mailService = $this->get('Web.CommonBundle.Mail.Tencent');
			$mailService->setMailTo('262864308@qq.com')
						->setSubject('测试邮件标题')
						->setBody('测试邮件内容');
			
			$mailService->send();
		}
		catch(\Exception $e){
			
			die($e->getMessage());
			
		}		
		
		
		return new Response();
	}
	
	
	
	
	
	
	
    public function tencentAction()
    {
    	
		$message = new SmtpMessage();
		$message->addTo('570617117@qq.com')
		 		->addFrom('262864308@qq.com')
		 		->setSubject('Greetings and Salutations!')
		 		->setBody("Sorry, I’m going to be late today!");
		
		$smtpOptions =  new SmtpOptions();
    	$smtpOptions->setHost('smtp.qq.com')
    				->setPort('465')
    				->setConnectionClass('login') 
    				->setConnectionConfig(
    										array(
    												'username' => '262864308@qq.com',
    											    'password' => 'hlk!qq@zmy#520',
    											    'ssl'=>'ssl'
    											)
    									 );
														 
											
    	$smtpTransport = new SmtpTransport();
    	$smtpTransport->setOptions($smtpOptions);
    	$smtpTransport->send($message);
    	
    	
        return $this->render('WebCommonBundle:Default:index.html.twig');
    }
    
    
    public function wangyiAction()
    {
    	 
    	$message = new SmtpMessage();
    	$message->addTo('262864308@qq.com')
		    	->addFrom('hengleike@zhongtoushe.cn')
		    	->setSubject('您的众投社账号创建成功')
		    	->setBody("您的众投社账号创建成功，请点击以下链接进行激活,<br/>http://www.zhongtouse.cn/user/active/dfsdfhshfhuih32u32323hkjhjdhsad-sfhdskhfsdhfhdsfhdsfhdsfsdhfhds");
    
    	$smtpOptions =  new SmtpOptions();
    	$smtpOptions->setHost('smtp.qiye.163.com')
			    	->setPort('994')
			    	->setConnectionClass('login')
			    	->setConnectionConfig(
			    			array(
			    					'username' => 'hengleike@zhongtoushe.cn',
			    					'password' => 'zts@zmy#5201314',
			    					'ssl'=>'ssl'
			    			)
			    	);
    		
    		
    	$smtpTransport = new SmtpTransport();
    	$smtpTransport->setOptions($smtpOptions);
    	$smtpTransport->send($message);
    	 
    	 
    	return $this->render('WebCommonBundle:Default:index.html.twig');
    }
    
    
    
    
    
    
    
    
}
