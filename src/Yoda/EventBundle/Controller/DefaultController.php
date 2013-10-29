<?php

namespace Yoda\EventBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name, $count)
    {
        var_dump($count, $name );
        return $this->render('EventBundle:Default:index.html.twig', array('name' => $name));
    }

    public function my_nameAction($name, $count)
    {
        var_dump($count, $name );
        return $this->render('EventBundle:Default:index.html.twig', array('name' => $name));
    }
}


