<?php

namespace Web\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WebPageBundle:Default:index.html.twig', array('name' => $name));
    }
}
