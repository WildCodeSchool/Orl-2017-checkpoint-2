<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * Acces Doctrine
     * @var
     */
    private $em;

    /**
     * Nombre de cartes
     * @var
     */
    private $nbCards;

    /**
     * Carte courante (affichage)
     * @var
     */
    private $curCard = 1;

    private function getEm()
    {
        if ( !isset($this->em) ) {
            // On appelle Doctrine
            $this->em = $this->getDoctrine()->getManager();
        }
        return $this->em;
    }

    /**
     * @return mixed
     */
    public function getNbCards()
    {
        if ( !isset($nbCard) ) {
            // on recupere le nombre de cartes dans la story
            $allEnr = $this->getEm()->getRepository('CommitStripBundle:Card')->findAll();
            $this->setNbCards(count($allEnr));
        }
        return $this->nbCards;
    }

    /**
     * @param mixed $nbCards
     * @return DefaultController
     */
    public function setNbCards($nbCards)
    {
        $this->nbCards = $nbCards;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurCard()
    {
        return $this->curCard;
    }

    /**
     * @param mixed $curCard
     * @return DefaultController
     */
    public function setCurCard($curCard)
    {
        $this->curCard = $curCard;
        return $this;
    }




    /**
     * @Route("/story")
     */
    public function indexAction()
    {
        // recherche du nombre de cartes
        $found = $this->getEm()->getRepository('CommitStripBundle:Card')->findByNbcard(1);
        $params = [
            'nbcards' => $this->getNbCards(),
            'card' => $found[0],
        ];
        return $this->render('CommitStripBundle:Default:index.html.twig', $params);
    }

    /**
     * @Route("/story/{nbcard}")
     *     defaults={"nbcard": 1},
     *     requirements={
     *         "nbcard": "\d+"
     *     }
     */
    public function storyAction($nbcard)
    {
        $found = $this->getEm()->getRepository('CommitStripBundle:Card')->findByNbcard($nbcard);
        $params = [
            'nbcards' => $this->getNbCards(),
            'card' => $found[0],
        ];
        return $this->render('CommitStripBundle:Default:index.html.twig', $params);
    }

}
