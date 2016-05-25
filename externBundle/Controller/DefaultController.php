<?php

namespace RE\externBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('REexternBundle:Default:index.html.twig');
    }
}
