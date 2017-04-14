<?php

/**
 * Created by PhpStorm.
 * User: malik
 * Date: 14/04/17
 * Time: 11:19
 */
class Db
{
    private $db;

    /**
     * DB constructor.
     * @param $db */

    public function __construct()
    {
        $this->db = new \PDO(DSN, USER, PASS);
    }

    /**
     * @return \PDO
     */
    public function getDb()
    {
        return $this->db;
    }

    public function dBQuery($req, $model)
    {
        return $this->db->query($req)->fetchAll(\PDO::FETCH_CLASS, __NAMESPACE__ . '\Model\\'.ucfirst($model));
    }
}