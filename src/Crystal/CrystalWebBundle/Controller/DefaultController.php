<?php

namespace Crystal\CrystalWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CrystalWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
