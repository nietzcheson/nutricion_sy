<?php

namespace Nutricion\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NutricionTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
