<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class Homepage
{
    private $twig;
    private $log;

    public function __construct(\Twig_Environment $twig, LoggerInterface $log)
    {
        $this->twig = $twig;
        $this->log = $log;
    }

    public function indexAction() : Response
    {
        $this->log->addDebug("Test the monolog logging");

        $posts = $this->getPosts();

        return new Response(
            $this->twig->render('index.html.twig',
                array(
                    'posts' => $posts
                )
            )
        );
    }

    private function getPosts() : array
    {
        $postA = [
            'title' => 'first article',
            'description' => 'first description',
            'image' => 'http://placehold.it/600x270',
            'likes' => 1,
            'comments' => 1
        ];
        $postB = [
            'title' => 'second article',
            'description' => 'second description',
            'image' => 'http://placehold.it/600x270',
            'likes' => 2,
            'comments' => 2
        ];

        return [$postA, $postB];
    }

}
