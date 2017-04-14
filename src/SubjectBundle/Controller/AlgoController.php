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
        $string='';
        $countWord = str_word_count($string[1]);
        $order='';

        for($i=0; $i< $countWord; $i++ )
        {
            if ($order == 'DESC'){
                rsort($countWord);
            } elseif ($order == 'ASC'){
                sort($countWord);
            }
        }
        return $countWord;
    }
}
