<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 14/04/17
 * Time: 11:39
 */

namespace SubjectBundle\Service\Order;


abstract class AbstractSort implements OrderInterface
{
    /**
     * Implementation commune du tri
     *
     * @param $string
     * @return string
     */
    public function sort($string): string
    {
        $tabTmp = explode(' ', $string);
        $tabLength = [];

        foreach ($tabTmp as $mot) {
            $tabLength[strlen($mot)] = $mot;
        }

        $tabLengthSorted = $this->doSort($tabLength);

        $orderedString = implode(' ', $tabLengthSorted);
        return $orderedString;
    }

    /**
     * Délègue la responsabilité specifique à chaque tri dans sa classe dédiée
     *
     * @param array $data
     * @return array
     */
    abstract public function doSort(array $data) : array;
}
