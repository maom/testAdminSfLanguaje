<?php

namespace LanguageFirst\RespuestasUsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('RespuestasUsuariosBundle:Default:index.html.twig', array('name' => $name));
    }
}
