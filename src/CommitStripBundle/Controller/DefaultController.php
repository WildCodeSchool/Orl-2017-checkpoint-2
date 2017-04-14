<?php

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $id=1;
        $carte = $em->getRepository('CommitStripBundle:Card')
                ->find($id);

        return $this->render('CommitStripBundle:Default:index.html.twig', ['carte' => $carte]);
    }

    /**
     * @Route("/next", name="next")
     */
    public function showNextCard()
    {
        $em = $this->getDoctrine()->getManager();

        $id = $em->getRepository('CommitStripBundle:Card')
            ->find('id');
        $nextId = $id + 1;
        $carte = $em->getRepository('CommitStripBundle:Card')
                ->find($nextId);

        return $this->render('CommitStripBundle:Default:carteNext.html.twig', ['carte' => $carte]);
    }

    /**
     * @Route("/previous", name="previous")
     */
    public function showPreviousCard()
    {
        $em = $this->getDoctrine()->getManager();

        $id = $em->getRepository('CommitStripBundle:Card')
            ->find('id');
        $nextId = $id - 1;
        $carte = $em->getRepository('CommitStripBundle:Card')
            ->find($nextId);

        return $this->render('CommitStripBundle:Default:cartePrevious.html.twig', ['carte' => $carte]);
    }
}
