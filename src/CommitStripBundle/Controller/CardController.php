<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 14/04/17
 * Time: 11:35
 */

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class CardController extends Controller
{
    /**
     * @Route("/{id}")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $cards = $em->getRepository('CommitStripBundle:Card')
            ->find($id);

        return $this->render('CommitStripBundle:symfony:show.html.twig', ['card' => $cards]);
    }
}