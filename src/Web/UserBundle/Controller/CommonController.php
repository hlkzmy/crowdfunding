<?php

namespace Web\UserBundle\Controller;

use Web\UserBundle\Controller\UserBaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommonController extends UserBaseController
{
    /**
     * 用户的登陆界面
     * @return \Symfony\Component\HttpFoundation\Response
     */
	
	
    public function loginAction(){

    	
    	
    	
       return $this->render('WebUserBundle:Common:login.html.twig');
    }//function loginAction() end
    

    /**
     * 用户注册界面
     */
    public function registerAction(){
    
    	$registerForm = $this->createForm('user_register_form',null,array(
														    				'attr'=>array(
														    					'id'=>'register-form',	
														    					'class'=>'form-horizontal'
														    				)
    			
    									 ));
    	
    	$formView = $registerForm->createView();
    		
    	return $this->render('WebUserBundle:Common:register.html.twig',array('formView'=>$formView));
    	
    }//function registerAction() end
    
    
    /**
     * 检测用户注册提交的数据
     */
    public function checkRegisterAction(){
    	
    	
    	
    	
    	return new JsonResponse();
    }//function checkRegisterAction() end
    
    
    public function layoutAction(){
    
    
    
    
    	return $this->render('WebUserBundle:Console:index.html.twig');
    }
    
    
    
    public function logoutAction(){
    
    	 
    	
    	 
    }//function logoutAction() end
    
    
}
