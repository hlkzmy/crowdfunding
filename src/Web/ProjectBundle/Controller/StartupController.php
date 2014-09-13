<?php

namespace Web\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StartupController extends Controller
{
	
	
    public function indexAction()
    {
    	
    	
    	
        return $this->render('WebProjectBundle:Startup:index.html.twig');
    }
    
    
    
    
}
