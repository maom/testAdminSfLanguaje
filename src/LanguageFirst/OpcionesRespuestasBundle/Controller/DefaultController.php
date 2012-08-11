<?php

namespace LanguageFirst\OpcionesRespuestasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('OpcionesRespuestasBundle:Default:index.html.twig', array('name' => $name));
    }
}
