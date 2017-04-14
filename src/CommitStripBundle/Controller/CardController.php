<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 14/04/17
 * Time: 09:45
 */

namespace CommitStripBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CardController extends Controller
{
    /**
     * @Route("/story/{id}")
     */
    public function showCard($id)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card')->find($id);

        return $this->render('CommitStripBundle:Card:show.html.twig', ['card' => $card]);
    }
}