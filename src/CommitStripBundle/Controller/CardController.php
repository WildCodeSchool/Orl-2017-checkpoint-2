<?php
/**
 * Created by PhpStorm.
 * User: jean-baptiste
 * Date: 14/04/17
 * Time: 11:07
 */

namespace CommitStripBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class CardController extends Controller
{
    /**
     * @Route("/showcard/{id}")
     */

    public function showCardAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card')
            ->find($id);
        return $this->render('CommitStripBundle:Default:card.html.twig', array('card' => $card));
    }
}