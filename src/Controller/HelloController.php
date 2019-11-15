<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/world")
     */
    public function world()
    {
        return new Response(
            '<html><body>Hello World!</body></html>'
        );
    }

    /**
     * @Route("/hello/foo")
     */
    public function foo()
    {
        return new Response(
            '<html><body>Hello Foo!</body></html>'
        );
    }

    /**
     * @Route("/hello/bar")
     */
    public function bar()
    {
        return new Response(
            '<html><body>Hello Bar!</body></html>'
        );
    }
}
