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
        $words=explode(" ",$string);
        $words['lettersnb']='';
        for ($i=0; $i<count($words); $i++){
            $words[$i]['lettersnb']=strlen($words[$i]);
            $lettersnb=strlen($words[$i]);
            if ($order=='ASC' && asort($lettersnb)===TRUE){
                echo implode(" ", $words);
            }
            elseif ($order=='DES' && arsort($lettersnb)===TRUE) {
                echo implode(" ", $words);
            }
        }
        return $words;
    }
}