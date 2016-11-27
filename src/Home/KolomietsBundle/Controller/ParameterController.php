<?php

namespace Home\KolomietsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ParameterController extends Controller
{
    /**
     * @return Response
     */
    public function withoutParamAction()
    {
        $response = new Response('Without parameters');
        return $response;
    }

    /**
     * @param $one
     * @return Response
     */
    public function oneParamAction($slug)
    {
        $response = new Response('With one \''.$slug.'\' parameter');
        return $response;
    }

    /**
     * @param $one
     * @param $two
     * @return Response
     */
    public function twoParamAction($one, $two)
    {
        $response = new Response('With two \''.$one.'\', \''.$two.'\' parameters');
        return $response;
    }

    /**
     * @param integer $param
     * @return Response
     */
    public function requirementDigitalParamAction($slug)
    {
        $response = new Response('With requirement digital \''.$slug.'\' parameter');
        return $response;
    }

    /**
     * @param string $param
     * @return Response
     */
    public function requirementStringParamAction($slug)
    {
        $response = new Response('With requirement string \''.$slug.'\' parameter');
        return $response;
    }
}
