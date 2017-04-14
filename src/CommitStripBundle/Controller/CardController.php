<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 14/04/17
 * Time: 11:03
 */


namespace CommitStripBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bridge\Doctrine\Tests\Fixtures\Person;
use CommitStripBundle\Entity\Card;



class CardController extends Controller
{
    /**
     * @Route("/story/{id}")
     */
    public function showCardAction($id)
    {
        $em=$this->getDoctrine()->getManager();

        $card = $em->getRepository('CommitStripBundle:Card')->find($id);

        return $this->render('CommitStripBundle:Default:viewone.html.twig',array('card'=>$card));
    }

    /**
     * @Route("/story/all")
     */
    public function showAllCardAction()
    {
        $em=$this->getDoctrine()->getManager();

        $cards = $em->getRepository('CommitStripBundle:Card')->findAll();

        return $this->render('CommitStripBundle:Default:show.html.twig',array('cards'=>$cards));
    }

    /**
     * @Route("/story")
     */
    public function showOneAction()
    {
        $em=$this->getDoctrine()->getManager();

        $card = $em->getRepository('CommitStripBundle:Card')->find(2);

        return $this->render('CommitStripBundle:Default:view.html.twig',array('card'=>$card));
    }



}