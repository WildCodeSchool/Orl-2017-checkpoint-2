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
        //On va parcourir $words mot par mot et insérer, dans le tableau $stringOrder, en clé le mot et en valeaur son nombre de caractères
        $stringOrder = [];
        foreach($words as $word){
            $stringOrder[$word] = strlen($word);
        }
        //On tri notre tableau $stringOrder du mot le plus court au mot le plus long ou inversement selon le paramêtre $order
        if($order=='ASC'){
            asort($stringOrder);
        }else{
            arsort($stringOrder);
        }
        //On transforme le tableau $stringOrder en phrase grâce à la fonction php implode. On utilise la fonction array_keys sur $stringOrder car nous souhaitons optenir une phrase avec les mots (c'est à dire les clés de $stringOrder) et non une suite de chiffres représentants le nombre de caractères de chaque mot (les valeurs). Enfin, on retourne le résultat
        $stringOrder = implode(" ", array_keys($stringOrder));
        return $stringOrder;
    }
}
