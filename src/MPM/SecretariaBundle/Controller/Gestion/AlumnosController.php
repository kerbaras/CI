<?php

namespace MPM\SecretariaBundle\Controller\Gestion;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlumnosController extends Controller
{
    public function indexAction($inicail = "A")
    {
        $em = $this->getDoctrine()->getManager();
        $alumnos = $em->getRepository('EntityBundle:Alumno')->findByInicial($inicail);
        return $this->render('SecretariaBundle:Gestion:Alumnos/index.html.twig', array('alumnos' => $alumnos));
    }
} 