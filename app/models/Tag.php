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

    public function getPostTags($id)
    {
        $this->db->query('SELECT * FROM tags JOIN post_tags ON tags.id=post_tags.tag_id WHERE post_tags.post_id=:id');
        $this->db->bind(':id', $id);
        $result = $this->db->getAll();
        return $result;
    }

}