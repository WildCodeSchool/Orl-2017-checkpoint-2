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
        $stringArray= explode(' ',$string);

        if (strpos($order, 'DESC') !== false){
            foreach ($stringArray as $key=>$value){
                asort($stringArray, strlen($value));
            }
            $result=implode($stringArray, ' ');
            return $result;
        }
        if (strpos($order, 'ASC') !== false){
            foreach ($stringArray as $key=>$value){
                arsort($stringArray, strlen($value));
            }
            $result=implode($stringArray, ' ');
            return $result;
        }
    }
}
