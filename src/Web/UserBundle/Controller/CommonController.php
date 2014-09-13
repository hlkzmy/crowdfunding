<?php

namespace Web\UserBundle\Controller;

use Web\UserBundle\Controller\UserBaseController;
use Symfony\Component\HttpFoundation\Response;

class CommonController extends UserBaseController
{
    
    public function loginAction(){


    	return $this->render('WebUserBundle:Common:login.html.twig');
    	
    }//function loginAction() end
    
    /**
     * 用户注册界面
     */
    public function registerAction(){
    
    
    
    	return $this->render('WebUserBundle:Common:register.html.twig');
    }//function registerAction() end
    
    
    public function logoutAction(){
    
    	 
    	 
    }//function logoutAction() end
    
    
}
