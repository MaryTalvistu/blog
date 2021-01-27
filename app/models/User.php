<?php


class User
{
    private $db;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByEmail($email) {
        $this->db->query('SELECT * FROM useers WHERE email=:email');
        $this->db->bind(':email', $email);
        $user = $this->db->getOne();
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}