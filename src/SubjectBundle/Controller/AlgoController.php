<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //
    public function strlenOrder($string, $order)
    {
        $mots = explode(' ',$string);
        foreach ($mots as $mot) {
           strlen($mot);
        }
        var_dump($order);
    }
}
