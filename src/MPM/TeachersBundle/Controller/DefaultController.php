<?php

namespace MPM\TeachersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TeachersBundle:Default:index.html.twig', array('name' => $name));
    }
}
