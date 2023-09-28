<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{

    #[Route('/')]
    public function homeppage() : Response{
       return new Response('Title test 123 ');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response{


        return new Response("Browse ".$slug);
    }
}
