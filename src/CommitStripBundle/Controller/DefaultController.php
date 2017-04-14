<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/story", name="storyinit")
     */
    public function initAction()
    {
        $em = $this->getDoctrine()->getManager();

        $minId = $em->getRepository('CommitStripBundle:Card')
                    ->getMinId();

        return $this->redirectToRoute('story', ['id' => $minId]);
    }

    /**
     * @Route("/story/{id}", name="story")
     */
    public function indexAction(Card $card)
    {
        $em = $this->getDoctrine()->getManager();

        $minId = $em->getRepository('CommitStripBundle:Card')
                    ->getMinId();

        $maxId = $em->getRepository('CommitStripBundle:Card')
                    ->getMaxId();

        return $this->render('CommitStripBundle:Default:index.html.twig',
                            ['minid'=> $minId,
                             'maxid'=> $maxId,
                             'card' => $card]
        );
    }

    /**
     * @Route("/nextstory/{id}", name="next_story")
     */
    public function nextStoryAction(Card $card)
    {
        $em = $this->getDoctrine()->getManager();

        $nextCard = $em->getRepository('CommitStripBundle:Card')
                     ->getNextCard($card->getId());

        return $this->redirectToRoute('story', ['id' => $nextCard->getId()]);
    }

    /**
     * @Route("/prevstory/{id}", name="prev_story")
     */
    public function prevStoryAction(Card $card)
    {
        $em = $this->getDoctrine()->getManager();

        $prevCard = $em->getRepository('CommitStripBundle:Card')
            ->getPrevCard($card->getId());

        return $this->redirectToRoute('story', ['id' => $prevCard->getId()]);
    }
}
