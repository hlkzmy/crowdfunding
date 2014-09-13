<?php

namespace Web\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemController extends Controller
{
	
	
    public function listAction()
    {
        return $this->render('WebProjectBundle:Item:list.html.twig');
    }
    
    
    public function detailsAction()
    {
    	
    	
    	
    	return $this->render('WebProjectBundle:Item:details.html.twig');
    }
    
}
