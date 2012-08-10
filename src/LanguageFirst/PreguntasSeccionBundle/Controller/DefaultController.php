<?php

namespace LanguageFirst\PreguntasSeccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('PreguntasSeccionBundle:Default:index.html.twig', array('name' => $name));
    }
}
