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
        $words = explode('', $string);
        foreach ($words as $word) {
            $strlen = strlen($word);
            return $strlen;
        }

        $strlen=0;
        $word='';
        $order='';

        if ($order = 'ASC'){
            asort($words, $strlen);
            return implode(' ', $word);

        } else ($order = 'DESC'){
            arsort($words, $strlen);
            return implode(' ', $word);
        }



    }
}
