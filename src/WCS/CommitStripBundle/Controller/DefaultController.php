<?php

namespace WCS\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
     *@Route("/story/{$id}")
     */
    public function showStoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card') -> findOneBy($id);
        return $this->render('CommitStripBundle:Default:story.html.twig', ['card' => $card]);

    }
}
