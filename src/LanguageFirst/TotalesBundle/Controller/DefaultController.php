<?php

namespace LanguageFirst\TotalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TotalesBundle:Default:index.html.twig', array('name' => $name));
    }
}
