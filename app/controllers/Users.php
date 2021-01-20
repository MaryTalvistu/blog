<?php


class Users extends Controller
{

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->usersModel = $this->model('User');
    }

    public function register()
    {
        $this->view('users/register');
    }

    public function login()
    {
        $this->view('users/login');
    }

}
