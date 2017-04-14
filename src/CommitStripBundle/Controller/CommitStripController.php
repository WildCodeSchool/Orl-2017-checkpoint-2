<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 14/04/17
 * Time: 11:04
 */

namespace CommitStripBundle\Controller;



use Hph\Controller\ControllerDefault;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommitStripController extends Controller
{
    /**
     * @Route("/minibook")
     */
    public function miniBookAction()
    {
        $commitstripmanager = new commitstripmanager;
        $commitsrip = $commitstripmanager->listAll();
        return $this->render('CommitStripBundle:minibook.html.twig');
    }
}