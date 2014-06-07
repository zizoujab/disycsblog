<?php

namespace Disycs\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DisycsBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
