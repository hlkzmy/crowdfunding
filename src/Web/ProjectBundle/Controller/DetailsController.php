<?php

namespace Web\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailsController extends Controller
{
	
	
    public function indexAction()
    {
    	
    	
    	
    	return $this->render('WebProjectBundle:Details:index.html.twig');
    }
    
}
