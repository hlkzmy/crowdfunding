<?php

namespace Web\UserBundle\Controller;

use Web\UserBundle\Controller\UserBaseController;
use Symfony\Component\HttpFoundation\Response;


class CompanyInvestorController extends UserBaseController
{
    public function indexAction($name)
    {
        return $this->render('WebUserBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    /**
     * 用户注册界面
     */
    public function registerAction(){
    	 
    	 
    	 
       return $this->render('WebUserBundle:ProjectOwner:register.html.twig');
    }//function registerAction() end
    
    
}
