<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Person;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PictureController extends Controller
{
    /**
     * @Route("/page/{id}")
     */
    public function showPicture(Card $picture)

    {

        $em = $this->getDoctrine()->getManager();

        return $this->render('CommitStripBundle:Picture:picture.html.twig', ['picture' => $picture]);
    }



    /**
     * @Route("/add-personnage/{picture}/{nbcard}")
     */
    public function addPictureAction($picture,$nbcard)
    {
        $em = $this->getDoctrine()->getManager();



        $card = new Card();


        $card->setPicture($picture);
        $card->setNbcard($nbcard);


        $em->persist($card);


        $em->flush();

        return $this->render('CommitStripBundle:Picture:picture.html.twig', ['card' => $card]);
    }

}
