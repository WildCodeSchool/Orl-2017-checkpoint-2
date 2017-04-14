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
        //explose en string pour recuperer une $Key=>pair
        $format = explode(' ', $string);

        //cree un array temporaire
        $res = array();

        //boucles un array de mot, key = word lenght, value = word
        foreach ($format as $key => $word){
                $res[strlen($word)] = $word;
        }

        //if asc or desc
        if ($order == 'ASC'){
            ksort($res);
            //recree un string a partir de l'array trier
            $format = implode($res, ' ');
            return $format;
        }elseif($order == 'DESC'){
            krsort($res);
            //recree un string a partir de l'array trier
            $format = implode($res, ' ');
        }
        return $format;

    }
}
