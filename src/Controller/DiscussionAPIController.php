<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DiscussionAPIController extends AbstractController
{
    /**
     * @Route("/api/discussion", name="discussion_a_p_i")
     */
    public function getDiscussions()
	{
		$discussions = $this->getDoctrine()
        ->getRepository('App:Discussion')
       	->findall();
	    dd($discussions);
	}
}
