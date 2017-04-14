<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //
    /**
     * @param $string
     * @param $order
     */
    public function strlenOrder($string, $order)
    {
        $mots=explode(" ",$string);
        for ($i=0; $i<count($mots); $i++){
            $mots[$i]['nblettres']=strlen($mots[$i]);
            $letternb=strlen($mots[$i]);
            if ($order=='ASC' && asort($letternb)===TRUE){
                echo implode(" ", $mots);
            }
            elseif ($order=='DES' && arsort($letternb)===TRUE) {
                echo implode(" ", $mots);
            }
        }
    }
}