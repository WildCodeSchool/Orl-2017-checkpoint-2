<?php
/**
 * Created by PhpStorm.
 * User: wilder8
 * Date: 14/04/17
 * Time: 10:59
 */

namespace CommitStripBundle\Controller;

use CommitStripBundle\CommitStripBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CommitStripBundle\Entity\Card;

class CardController extends Controller
{
    /**
     * @param $nbcard
     * @return \Symfony\Component\HttpFoundation\Response
     * @package CommitStripBundle\Controller
     * @Route("/story/{nbcard}")
     */

    public function showCardAction($nbcard)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card')
            ->find($nbcard);
        return $this->render('CommitStripBundle:Default:showcard.html.twig',['card'=>$card]);
    }

    /**
     * @param $nbcard
     * @return \Symfony\Component\HttpFoundation\Response
     * @package CommitStripBundle\Controller
     * @Route("/story/{nbcard}")
     */
/*    public function showNextCardAction($nbcard)
    {
        $em = $this->getDoctrine()->getManager();
        if (isset($_POST['Suivant']) {
            $card = $em->getRepository('CommitStripBundle:Card')
                ->find($nbcard);
        }
        return $this->render('CommitStripBundle:Default:showcard.html.twig',['card'=>$card]);
    }*/


}

