<?php

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CommitStripBundle\Entity\Card;

class DefaultController extends Controller
{
    /**
     * @Route("/story/{id}", requirements={"id" = "\d+"}, defaults={"id" = 1}, name="story")
     */
    public function storyAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card')
            ->find($id);
        $datas = $em->getRepository('CommitStripBundle:Card')
            ->findall();
        $param = ['card'=>$card, 'datas'=>$datas];
        return $this->render('CommitStripBundle:Default:story.html.twig',$param);
    }

}
