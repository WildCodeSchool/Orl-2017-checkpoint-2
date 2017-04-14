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
        $string = "Il fait chaud";

        if ($order = "ASC") {
            $mots = explode(" ", $string);
            foreach ($mots as $key=>$value) {
                $tri = count_chars($value, 3);
                $ordre_croissant = asort($tri);
                echo $ordre_croissant;
            }
        }

        else {
            $mots = explode(" ", $string);
            foreach ($mots as $key=>$value) {
                $tri = count_chars($value, 3);
                $ordre_decroissant = arsort($tri);
                echo $ordre_decroissant;
            }
        }
    }
}
