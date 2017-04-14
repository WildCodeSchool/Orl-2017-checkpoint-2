<?php
/**
 * Created by PhpStorm.
 * User: necro
 * Date: 14/04/17
 * Time: 11:13
 */

namespace CommitStripBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MyBookController extends Controller
{
    /**
     * @Route("/story/{id}")
     */
    public function bookAction($id)
    {
        // recup l'image de la db;
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('CommitStripBundle:Card')->findAll();
        $book = $em->getRepository('CommitStripBundle:Card')->find($id);

        $right = true;
        $left = true;

        if($product[$id] == 0){
            $left = false;
        }else if($product[$id] == count($product)){
            $right = false;
        }
        $picture = $product->getPicture();

        return $this->render('CommitStripBundle:Default:mybook.html.twig', array('picture' => $picture, 'left' => $left, right => $right));
    }
}
