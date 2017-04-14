<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/story")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $card = $em->getRepository('CommitStripBundle:Card')->findAll();

        return $this->render('CommitStripBundle:Default:index.html.twig', ['card'=>$card]);
    }

    /**
     * @Route("/story")
     */
    public function showCardAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $card = $em->getRepository('CommitStripBundle:Card')->find(1);

        return $this->render('CommitStripBundle:Default:index.html.twig', ['card'=>$card]);
    }

}
