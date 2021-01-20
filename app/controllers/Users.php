<?php


class Users extends Controller
{

    /**
     * User constructor.
     */
    public function __construct()
    {
        $usersModel = $this->model('User');
    }

    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            print_r($_POST);
        } else {
        $this->view('users/register');
        }
    }

    public function login()
    {
        $this->view('users/login');
    }

}
