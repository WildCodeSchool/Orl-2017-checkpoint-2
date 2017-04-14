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


class CommitStripController extends Controller
{
    /**
     * @Route("/story")
     */
    public function ShowStory()
    {
        
        return $this->render('CommitStripBundle:Story:showStory.html.twig');
    }
}