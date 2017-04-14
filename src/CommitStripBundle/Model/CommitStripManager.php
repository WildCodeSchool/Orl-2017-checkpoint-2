<?php

/**
 * Created by PhpStorm.
 * User: malik
 * Date: 14/04/17
 * Time: 11:14
 */
class CommitStripManager
{
    public function listAll()
    {
        $req = "SELECT * FROM card";
        $res = $this->db->query($req);
        return $res->fetchAll(\PDO::FETCH_CLASS, '\model\\' . ucfirst('card'));
    }
}