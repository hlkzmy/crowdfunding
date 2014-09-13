<?php

namespace Web\UserBundle\Controller;

use Web\UserBundle\Controller\UserBaseController;

class PersonalInvestorController extends UserBaseController
{
    public function indexAction($name)
    {
        return $this->render('WebUserBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    /**
     * 用户注册界面
     */
    public function registerAction(){
    	 
    	 
    	 
    }//function registerAction() end
    
    
}
