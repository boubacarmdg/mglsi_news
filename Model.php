<?php

class Model
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function selectAll($sql)
    {
        $result = $this->db->prepare($sql);
        $result->execute();
        $tab = $result->fetchAll();
        $result->closeCursor();
        return $tab;
    }

    public function selectOne($sql)
    {
        $result = $this->db->prepare($sql);
        $result->execute();
        $tab = $result->fetch();
        $result->closeCursor();
        return $tab;
    }

    public function select($table, $order = "")
    {
        $order = ($order != "") ? " order by $order" : "";

        $result = $this->db->prepare("select * from $table$order");
        $result->execute();
        $tab = $result->fetchAll();
        $result->closeCursor();
        return $tab;
    }

}
