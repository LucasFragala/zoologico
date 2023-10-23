<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class HelloController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $users = [
        ['name' => 'Cachorro', 'idade'=> '12'],
        ['name' => 'Gato', 'idade'=> '8'],
        ['name' => 'Passaro', 'idade'=> '13'],
        ['name' => 'Coelho', 'idade'=> '4'],
        ['name' => 'Hammster', 'idade'=> '2'],
        ['name' => 'Cavalo', 'idade'=> '10'],
        ];

        return $this->render('hello/homepage.html.twig',[
            'title'=> 'Home',
            'users' => $users,
        ]);
    }

    #[Route('/animal/{slug}')]
    public function animal(string $slug=null): Response
    {
        $newSlug = str_replace('-', ' ',$slug);
        $newSlug = u($newSlug)->title(true);
        return new Response('Olá, '.$newSlug);
    }
}