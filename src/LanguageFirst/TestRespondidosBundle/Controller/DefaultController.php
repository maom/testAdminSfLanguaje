<?php

namespace LanguageFirst\TestRespondidosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TestRespondidosBundle:Default:index.html.twig', array('name' => $name));
    }
}
