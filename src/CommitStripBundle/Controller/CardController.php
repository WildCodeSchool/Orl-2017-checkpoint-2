<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CardController extends Controller
{

    /**
     * @Route("/story/{id}")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card')->find($id);
        return $this->render('CommitStripBundle:Default:story.html.twig',array('card'=>$card));
    }
}
