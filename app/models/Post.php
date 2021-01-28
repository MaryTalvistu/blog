<?php


class Post
{
    private $db;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPosts()
    {
        $this->db->query('
            SELECT *,
            posts.id as postId,
            users.id as userId,
            posts.created_at as postCreated
            FROM posts
            INNER JOIN users
            ON posts.user_id = users.id
            ORDER BY posts.created_at DESC
        ');
        $result = $this->db->getAll();
        return $result;
    }

    public function getPostById($id)
    {
        $this->db->query('SELECT * FROM posts WHERE id=:id');
        $this->db->bind(':id', $id);
        $post = $this->db->getOne();
        return $post;
    }

}