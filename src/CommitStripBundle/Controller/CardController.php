<?php
/**
 * Created by PhpStorm.
 * User: wilder4
 * Date: 14/04/17
 * Time: 11:26
 */

namespace CommitStripBundle\Controller;


class CardController extends DefaultController
{
    /**
     * @Route("/show-card/{id}")
     */
    public function showCardAction(Card $card)
    {
        $card = $em->getRepository('CommitStripBundle:Card')->find($id);
        return $this->render('CommitStripBundle:Card:show.html.twig', ['card' => $card]);
    }
}