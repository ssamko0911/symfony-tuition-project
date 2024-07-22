<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PostController extends AbstractController
{
    private array $posts = [
        'This is my first post!',
        'This is another post of mine!',
        'The post of mine!',
    ];

    #[Route('/{limit<\d+>?3}', 'index', methods: ('GET'))]
    public function index(int $limit): Response
    {
        return $this->render('posts/index.html.twig', [
            'posts' => array_slice($this->posts, 0, $limit),
        ]);
    }

    #[Route('/posts/{id<\d+>}', name: 'showOne', methods: ('GET'))]
    public function showOne(int $id): Response
    {
        return $this->render('posts/showOne.html.twig', [
            'post' => $this->posts[$id],
        ]);
    }
}