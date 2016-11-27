<?php

namespace Home\KolomietsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ParameterController extends Controller
{
    public function withoutParamAction()
    {
        $response = new Response('Without parameters');
        return $response;
    }

    public function oneParamAction($one)
    {
        $response = new Response('With one \''.$one.'\' parameter');
        return $response;
    }

    public function twoParamAction($one, $two)
    {
        $response = new Response('With two \''.$one.'\', \''.$two.'\' parameters');
        return $response;
    }

    public function defaultParamAction($one = 'DEFAULT')
    {
        $response = new Response('With default \''.$one.'\' parameter');
        return $response;
    }

    public function requirementDigitalParamAction($param)
    {
        $response = new Response('With requirement digital \''.$param.'\' parameter');
        return $response;
    }

    public function requirementStringParamAction($param)
    {
        $response = new Response('With requirement string \''.$param.'\' parameter');
        return $response;
    }
}
