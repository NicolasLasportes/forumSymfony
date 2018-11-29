<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DisplayDiscussionsController extends AbstractController
{
    /**
     * @Route("/displaydiscussions", name="display_discussions")
     */
    public function index()
    {

    	$discussions = $this->getDoctrine()
        ->getRepository('App:Discussion')
       	->findall();
        $commentaries = $this->getDoctrine()
        ->getRepository('App:Commentary')
       	->findall();
       	return $this->render('display_discussions/index.html.twig', [
       		'discussions' => $discussions,
        	'commentaries' => $commentaries
       	]);
    }
}
