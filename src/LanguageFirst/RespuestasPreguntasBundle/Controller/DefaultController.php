<?php

namespace LanguageFirst\RespuestasPreguntasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('RespuestasPreguntasBundle:Default:index.html.twig', array('name' => $name));
    }
}
