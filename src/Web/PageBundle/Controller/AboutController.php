<?php

namespace Web\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
	
	
	/**
	 * 关于我们的网站页面
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function usAction()
    {
    	
    	
    	
        return $this->render('WebPageBundle:About:us.html.twig');
    }
    
    
}
