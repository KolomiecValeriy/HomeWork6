<?php

namespace Home\KolomietsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdminController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $link = "<a href = ".$this->generateUrl('home_kolomiets_oneParam', array('slug' => 'TEST'), UrlGeneratorInterface::ABSOLUTE_URL).">".$this->generateUrl('home_kolomiets_oneParam', array('slug' => 'TEST'), UrlGeneratorInterface::ABSOLUTE_URL)."</a>";
        $response = new Response($link);
        return $response;
    }
}
