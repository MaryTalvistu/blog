<?php


class Page
{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }
}