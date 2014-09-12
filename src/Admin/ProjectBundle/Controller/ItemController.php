<?php

namespace Web\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WebProjectBundle:Default:index.html.twig', array('name' => $name));
    }
}
