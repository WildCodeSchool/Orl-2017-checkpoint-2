<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/story/{nbcard}")
     */
    public function indexAction(Card $card)
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('CommitStripBundle:Default:card.html.twig', ['card' => $card]);
    }


//    /**
//     * @Route("/story/{nbcard}")
//     */
//    public function indexAction($page)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $card = $em->getRepository('CommitStripBundle:Card')->findOneByNbcard($page);
//        return $this->render('CommitStripBundle:Default:card.html.twig', ['card' => $card]);
//    }
//
    /**
     * @Route("/story")
     */
    public function homme()
    {
        $bienvenu = "Bonjour entré l'url story/1  pour avoir la suite.";
        return $this->render('CommitStripBundle:Default:base.html.twig', ['bvn' => $bienvenu]);
    }

}

