<?php

namespace Web\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegisterController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WebUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
