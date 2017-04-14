<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    private $string;
    private $order;

    public function strlenOrder($string, $order)
    {
        $words = explode(" ", $string);
        $nbwords = count($words);

        foreach ($words as $word => $length) {

            $length = strlen($word);

            if ($order = "ASC") {
                $tablesort = sort($length);
                for ($i = 0; $i = $nbwords; $i++) {

                    echo $tablesort[$i];
                }

            } elseif ($order = "DESC") {
                $tablesort = rsort($length);
                for ($i = 0; $i = $nbwords; $i++) {

                    echo key($tablesort[$i]);
                }
            }

        }

    }

    /**
     * @return mixed
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param mixed $string
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }
}
