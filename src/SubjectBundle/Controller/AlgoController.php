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
        $words = explode(' ', $string);

        foreach ($words as $word) {
            $wordsLength[$word] = strlen($word);
        }

        if ('ASC' == $order) {
            asort($wordsLength);
        } elseif ('DESC' == $order) {
            arsort($wordsLength);
        } else {
            return false;
        }

        $wordsLength = array_flip($wordsLength);
        $result = implode(' ', $wordsLength);

        return $result;
    }
}
