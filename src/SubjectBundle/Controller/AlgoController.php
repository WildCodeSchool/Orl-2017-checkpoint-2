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
        // Transformer la phrase en tableau ($sentence) en choisissant l'espace comme délimitateur de ($word):
        $sentence = explode(' ', $string);
        // Boucler sur chaque mot de la phrase :
        foreach ($sentence as $word) {
            // Calculer le nombre de caractères d'un mot :
            $nbLetters[$word] = strlen($word);
        }
        // Si l'ordre est croissant,
        if ($order == 'ASC') {
            // trier les valeurs en fonction du nombre de lettres :
            asort($nbLetters);
            // Autrement, si l'ordre est décroissant,
        } elseif ($order == 'DESC') {
            // trier les valeurs en fonction du nombre de lettres :
            arsort($nbLetters);
        }
        // Remplacer les clés par les valeurs de $nbLetters, et les valeurs de $nbLetters par les clés :
        $nbLetters = array_flip($nbLetters);
        // Rassembler les éléments $nbLetters en une chaîne, avec la chaîne glue (espace) entre deux éléments :
        return (implode(' ', $nbLetters));
    }
}