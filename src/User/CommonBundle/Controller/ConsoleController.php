<?php

namespace User\CommonBundle\Controller;

use User\CommonBundle\Controller\UserBaseController;
use Symfony\Component\HttpFoundation\Response;


class ConsoleController extends UserBaseController
{
   
	public function layoutAction(){
		
		
		
		
		return $this->render('UserCommonBundle:Console:index.html.twig');
	}
    
    
    
    
    
}
