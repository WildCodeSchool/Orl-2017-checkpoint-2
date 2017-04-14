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
        // on part de principe que les mots sont separes par des espaces (un seul espace entre deux mots)
        // on recupere la liste des mots dans une table
        $words = explode(' ', $string);
        // on peut avoir plusieurs mots identiques dans la phrase, et plusieurs mots qui ont la meme longueur
        // on ne peut donc pas se servir simplement des mots en cle et longueur en valeur, ou l'inverse, car
        // potentiellement plusieurs cles identiques : PAS GLOP ! (pas de ksort ou krsort ..)

        // on cree un nouveau tableau qui a en indice l'indice du tableau word et en valeur la longueur de word.
        // on force la creation d'un tableau associatif pour garder le couple cle-valeur
        $wordLength = [];
        for ( $i=0; $i<count($words); $i++) {
            $wordlength[] = [$i => strlen($words[$i])];
        }
        // on trie ce nouveau tableau sur ses valeurs (suivant $order)
        // note : je ne sais pas si on peut reutiliser le meme tableau ($array = asort($array) alors, soyons fou,
        // j'en créé un autre
        // NOTE : on part du principe que $order ne peut prendre QUE deux valeurs : ASC ou DESC.
        if ( $order == 'ASC' ) {
            // croissant
            $sortedLength = asort($wordlength);
        }
        else {
            // decroissant
            $sortedLength = arsort($wordlength);
        }
        // On peut surement faire mieux, mais je vais passer encore par un tableau intermediaire
        // pour preparer le resultat
        $sortedWords = [];
        foreach ($sortedLength as $key => $value ) {
            $sortedWords[] = $words[$key];
        }
        // YAPUKA restituer la liste de mots selon l'ordre defini ci-dessus.
        return implode(' ', $sortedwords);




        // bon, manifestement il y a encore quelque chose que je n'ai pas compris dans la mise en oeuvre des tests
        // (hors le fait que mon truc au dessus ne semble pas fonctionner)
        // 10h20, je passe au 2ème sujet


    }
}
