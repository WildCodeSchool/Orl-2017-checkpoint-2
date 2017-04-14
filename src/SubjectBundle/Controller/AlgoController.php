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
        //je met chaque mot de ma phrase dans un tableau
        $mots = explode(" ", $string);

        //je compte la longueur de mots et je crée un nouveau tableau
        foreach ($mots as $mot) {
            $longueur[$mot] = strlen($mot);
        }

        //je trie les valeurs de mon tableau dans l'ordre demandé
        if ($order == 'ASC'){
            asort($longueur);
        }elseif ($order == 'DESC'){
            arsort($longueur);
        }else
            return 'false';

        //j'inverse mes clés et mes valeurs
        $longueur = array_flip($longueur);

        // je défait mon tableau dans une chaine de caratère
        $phrase = implode(" ", $longueur);

        return $phrase;
    }
}
