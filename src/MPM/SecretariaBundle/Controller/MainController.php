<?php

namespace MPM\SecretariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecretariaBundle:Main:index.html.twig');
    }
} 