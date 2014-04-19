<?php

namespace MPM\SecretariaBundle\Controller\Gestion;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlumnosController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecretariaBundle:Gestion:Alumnos/index.html.twig');
    }
} 