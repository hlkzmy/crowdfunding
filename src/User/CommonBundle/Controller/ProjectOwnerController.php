<?php

namespace User\CommonBundle\Controller;

use User\CommonBundle\Controller\UserBaseController;
use Symfony\Component\HttpFoundation\Response;

class ProjectOwnerController extends UserBaseController
{
    public function indexAction($name)
    {
        return $this->render('UserCommonBundle:Default:index.html.twig', array('name' => $name));
    }
    
    /**
     * 用户注册界面
     */
    public function registerAction(){
    	
    	
    	
    	
    	
    	return $this->render('UserCommonBundle:ProjectOwner:register.html.twig');
    }//function registerAction() end
    
    
    
    
    
    
}
