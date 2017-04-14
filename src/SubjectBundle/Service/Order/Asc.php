<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 14/04/17
 * Time: 09:45
 */

namespace SubjectBundle\Service\Order;


class Asc extends AbstractSort
{
    /**
     * Trie par les clé de manière croissante.
     *
     * @param array $data
     * @return array
     */
    public function doSort(array $data): array
    {
        ksort($data);
        return $data;
    }
}
