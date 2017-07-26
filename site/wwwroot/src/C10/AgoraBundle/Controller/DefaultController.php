<?php

namespace C10\AgoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('C10AgoraBundle:Default:index.html.twig');
    }
}
