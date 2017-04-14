<?php

namespace CommitStrip\CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine;


class DefaultController
{
    /**
     * @Route("/book" name="book")
     */
    public function getCard()
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripCommitStripBundle:Card')->findAll();
        $picture = $this->getPicture();
        $nbcard = $this->getNbcard();
        return $twig->load('index.html.twig')->render(['picture' => $picture, 'nbcard' => $nbcard]);


    }

}
