<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 14/04/17
 * Time: 09:45
 */

namespace SubjectBundle\Service\Order;


class Desc extends AbstractSort
{
    /**
     * Trie par les clés de maniere décroissante.
     *
     * @param array $data
     * @return array
     */
    public function doSort(array $data): array
    {
        krsort($data);
        return $data;
    }
}
