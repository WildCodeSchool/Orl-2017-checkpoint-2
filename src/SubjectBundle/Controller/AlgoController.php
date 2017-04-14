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
        define("ORDER", $order);

        $mots = explode(' ', $string);

        $triAsc = sort($mots);
        $triDesc = rsort($mots);

        $result = '';
        if ($order = 'ASC' ) {
            foreach ($triAsc as $mot) {
                $result .= $mot.' ';
            }
        }
        elseif ($order = 'DESC' ) {
            foreach ($triDesc as $mot) {
                $result .= ' '.$mot;
            }
        }

        return trim($result);
    }
}
