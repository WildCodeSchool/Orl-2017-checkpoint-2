<?php

namespace NLF\CommitStripBundle\Controller;

use NLF\CommitStripBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class DefaultController extends Controller
{
    public function cardAction($nbcard = 1)
    {
        $em = $this->getDoctrine()->getManager();

        $card = $em->getRepository('NLFCommitStripBundle:Card')->find($nbcard);


        return $this->render('NLFCommitStripBundle:Card:index.html.twig', array('cards' => $card));

    }

    public function addAction()
    {
        $em = $this->getDoctrine()->getManager();
        $message = '';
        if (isset($_POST['add']) && isset($_POST['nb']) && isset($_POST['picture'])){

            $card = new Card();
            $card->setNbcard($_POST['nb']);
            $card->setPicture($_POST['picture']);
            $card->setName($_POST['name']);

            $em->persist($card);
            $em->flush();

            $message = "Bravo votre card à bien été ajouté";
        }

        $card = $em->getRepository('NLFCommitStripBundle:Card')->findAll();

        return $this->render('NLFCommitStripBundle:Card:add.html.twig', array('message' => $message, 'storys' => $card));

    }
}
