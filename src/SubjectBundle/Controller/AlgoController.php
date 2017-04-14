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
        $stringOk = '';
        $arrayString = explode(' ', $string);

        foreach ($arrayString as $word) {
            $arraynb[] = strlen($word);
        }

        if ($order == 'DESC') {
           arsort($arraynb);
        } else {
           asort($arraynb);
        }


        foreach ($arraynb as $key => $value) {
            $stringOk .=  $arrayString[$key] .' ';
        }

        return substr($stringOk, 0, -1);

    }
}

