<?php

namespace LanguageFirst\FaseTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('FaseTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
