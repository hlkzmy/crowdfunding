<?php

namespace User\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class UserBaseController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserCommonBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    
    
}
