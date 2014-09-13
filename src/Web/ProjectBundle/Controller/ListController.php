<?php

namespace Web\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListController extends Controller
{
	
	
    public function indexAction()
    {
    	
    	
        return $this->render('WebProjectBundle:List:index.html.twig');
    }
    
    
    
    
}
