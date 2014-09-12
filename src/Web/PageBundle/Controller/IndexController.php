<?php

namespace Web\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
	public function indexAction()
    {
    	
    	
        return $this->render('WebPageBundle:Index:index.html.twig');
    }
    
    
    
}
