<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète la fonction suivante //
    //////////////////////////////////////
    //idée: je transforme la chaine de caractère dans un tableau, je supprime les espaces
    //je trie le tableau suivant l'ordre demandé
    //je transforme le tableau en chaine de caractère avec un espace entre chaque valeur
    //
    /**
     * @param $string
     * @param $order
     * @return string
     */
    public function strlenOrder($string, $order)
    {


        $mots=explode("' '",$string);

        if($order='ASC'){
        $tab=sort($mots);
        $res=implode("' '",$tab);}

        elseif($order='DESC'){
        $tab=sort($mots);
        $res=implode("' '",$tab);}

        else{echo'erreur sur ordre demandé';}


        return $res;

    }
}
