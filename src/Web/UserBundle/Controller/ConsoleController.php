<?php

namespace Web\UserBundle\Controller;

use Web\UserBundle\Controller\UserBaseController;
use Symfony\Component\HttpFoundation\Response;


class ConsoleController extends UserBaseController
{
   
	public function layoutAction(){
		
		
		
		
		return $this->render('WebUserBundle:Console:layout.html.twig');
	}
    
    
    
    
    
}
