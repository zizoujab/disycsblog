<?php

namespace Disycs\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$posts = $this->get('doctrine')->getRepository('DisycsBlogBundle:Post')->findAll();
        return $this->render('DisycsBlogBundle:Default:index.html.twig',array('posts'=>$posts));
    }
}
