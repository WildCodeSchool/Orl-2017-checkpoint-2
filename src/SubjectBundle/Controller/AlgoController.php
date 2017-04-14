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
        //On transforme la phrase en un tableau de mots
        $words = explode(" ", $string);
        //$StringOrder est un tableau qui contiendra en clé le mot et en valeur la longueur de ce mot
        $stringOrder = [];
        //On parcoure la phrase mot par mot et effectuons l'insertion dans $stringOrder
        foreach($words as $word){
            $stringOrder[$word] = strlen($word);
        }
        //On tri notre tableau $stringOrder du mot le plus court au mot le plus long ou inversement selon la paramêtre $order passé en paramêtre de la méthode
        if($order=='ASC'){
            asort($stringOrder);
        }else{
            arsort($stringOrder);
        }
        //On transforme le tableau $stringOrder en phrase grâce à implode. On utilise la fonction array_keys car nous souhaitons optenir une phrase avec les mots (c'est à dire les clés de $stringOrder) et non une suite de chiffres représentants le nombre de caractère de chaque mot (les valeurs). Enfin, on retourne le résultat
        $stringOrder = implode(" ", array_keys($stringOrder));
        return $stringOrder;
    }
}
