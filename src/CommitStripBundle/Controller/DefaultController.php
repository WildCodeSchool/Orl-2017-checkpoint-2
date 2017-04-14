<?php

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function addAction($href)
    {
        $em = $this->getDoctrine()->getManager();
        $card = new \CommitStripBundle\Entity\Card();
        $card->setPicture($href);
        $nbCard = count($this->countCards());
        $card->setNbcard($nbCard);
        $em->persist($card);
        $em->flush();
        return $this->render('CommitStripBundle:Default:success.html.twig');
    }
    public function countCards()
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('CommitStripBundle:Card')->findAll();
    }
    public function showCard($id)
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('CommitStripBundle:Card')->find($id);
    }
    public function indexAction($id)
    {
        $nbCards = count($this->countCards());
        if($id<1||$id>$nbCards){
            return $this->render('CommitStripBundle:Default:error.html.twig');
        }
        $card = $this->showCard($id);
        return $this->render('CommitStripBundle:Default:index.html.twig', array('card'=>$card, 'nbCards'=>$nbCards));
    }
    public function formAction()
    {
        return $this->render('CommitStripBundle:Default:form.html.twig');
    }
}
