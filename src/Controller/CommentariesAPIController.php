<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentariesAPIController extends AbstractController
{
    /**
     * @Route("/commentaries/a/p/i", name="commentaries_a_p_i")
     */
    public function index()
    {
        return $this->render('commentaries_api/index.html.twig', [
            'controller_name' => 'CommentariesAPIController',
        ]);
    }
}
