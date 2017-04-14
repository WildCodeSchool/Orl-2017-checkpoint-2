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
        $string = "il fait chaud";

        explode(' ', $string);

        //  je pensais decouper la string en tableau avec comme séprateur l'espace entre les mots)'.Pour avoir un tableau comme ça.

        //  [0]=>il
        //  [1]=>fait
        //  [2]=>chaud

        //  Puis demander de trier le tableau par ordre croissant de la clé et remettre le tableau en string.

        // dans un second temps dire de ranger le tableau dans l'ordre inverse de la clé... ce qui aura pour but de retourner
        // la phrase.

        // en rentrant le parametre $string et %order la phrase sera écrite dans un sens ou dans l'autre.

        // utiliser la fonction explode pour mettre la string en tableau. array explode ( string $delimiter , string $string)
        // le parametre ASC range les clés dans l'ordre croissant
        // le parametre DSC range les clés dans l'ordre décroissant

        // la fonction implode transforme le tableau en string.
    }
}