<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route(path: '/test12', name: 'test12')]
    public function test(Request $request): Response
    {
        $test = 1;

        $test = $test + 2;

        return new Response(
            '<html><body>Yeeey, merge!!</body></html>'
        );
    }

    #[Route(path: '/ruta', name: 'test')]
    public function test2(Request $request): Response
    {
        return new Response(
            '<html><body>TEST, ROUTE NR 2!!</body></html>'
        );
    }
}