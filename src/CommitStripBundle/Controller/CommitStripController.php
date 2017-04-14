<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 14/04/17
 * Time: 10:16
 */

namespace CommitStripBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\DependencyInjection\ContainerInterface;


class CommitStripController extends Controller
{
    /**
     * @Route("/story/{nbcard}", requirements={"nbcard' = '\d+"})
     * @param $nbcard
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showStoryAction($nbcard)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card')->findOneByNbcard($nbcard);
        return $this->render('CommitStripBundle:Story:showStory.html.twig', ['card'=>$card]);
    }

    /**
     * @Route("/story/add")
     */
public function add()
{

    return $this->render('CommitStripBundle:Story:addStory.html.twig', ['card'=>$card]);
}
}