<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 14/04/17
 * Time: 10:27
 */

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CommitStripBundle\Entity\Card;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CommitStripBundle\Controller\CardController;



class CardController extends DefaultController
{

    /**
     * @Route("showstory/{id}")
     *
     */


    public function showAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $story = $em->getRepository('CommitStripBundle:Card')->find($id);

        return $this->render('CommitStripBundle:card:show.html.twig', ['story' => $story]);
    }


    public function nextAction($id)
    {

        for ($i = 1; $i < 5; $i++) {
            return $i;


        }

        return $this->render('CommitStripBundle:card:show.html.twig', ['id' => $i]);

    }

}