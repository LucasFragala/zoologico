<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá Mundo!');
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace('-', ' ',$slug);
        return new Response('Olá, '.$newSlug);
    }
}