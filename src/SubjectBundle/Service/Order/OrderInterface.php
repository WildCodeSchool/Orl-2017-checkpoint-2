<?php
namespace SubjectBundle\Service\Order;
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 14/04/17
 * Time: 09:43
 */
interface OrderInterface
{
    /**
     * Trie une chaine
     *
     * @param $string
     * @return string
     */
    public function sort($string) :string;
}
