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

//        if ($order = 'ASC')
        $tab = explode(' ', $string);
        usort($tab, 'cmp');
        print_r($tab);


    }

        function cmp($a, $b)
        {
            if ($a == $b) {
                return 0;
            }
            return ($a < $b) ? -1 : 1;
        }
}



