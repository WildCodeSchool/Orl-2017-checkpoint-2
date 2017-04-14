<?php
/**
 * Created by PhpStorm.
 * User: francois
 * Date: 14/04/17
 * Time: 11:40
 */

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Bundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class CardController extends Controller
// avec beaucoup de soucis il est 11h38...
{


    /**
     * @Route("/livre/")
     */
    public function showLivreAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cards = $em->getRepository('CommitStripBundle:Card')
            ->findAll();
        return $this->render('CommitStripBundle:Card:livre.html.twig',array('picture'=>$cards));
    }
}