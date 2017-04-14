<?php

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/story/{id}")
     */
    public function indexAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $card = $em->getRepository('CommitStripBundle:Card')->find($id);


        return $this->render('CommitStripBundle:Default:index.html.twig', array(
            'card' => $card));
    }
}
