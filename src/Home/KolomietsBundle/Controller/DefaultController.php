<?php

namespace Home\KolomietsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeKolomietsBundle:Default:index.html.twig');
    }
}
