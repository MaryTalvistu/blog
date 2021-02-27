<?php


class Tag
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTags()
    {
        $this->db->query('SELECT * FROM tags');
        $result = $this->db->getAll();
        return $result;
    }

}