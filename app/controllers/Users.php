<?php


class Users extends Controller
{

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this -> usersModel = $this->model('User');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_error' => '',
                'email_error' => '',
                'password_error' => '',
                'confirm_password_error' => ''
            );
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter your name';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter your e-mail';
            } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['email_err'] = 'Please enter the valid e-mail';
            } else if ($this->usersModel->findUserByEmail($data['email'])) {
                $data['email_err'] = 'Email is already taken';
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter the password';
            } else if (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must consist of at least 6 characters';
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please re-enter your password';
            } else if (strlen($data['confirm_password']) < 6) {
                $data['confirm_password_err'] = 'Password must consists at least 6 characters';
            } else if ($data['password'] !== $data['confirm_password']) {
                $data['confirm_password_err'] = 'Passwords do not match';
            }
                print_r($data);
            } else {
                $this->view('users/register');
            }
        }


            public function login()
            {
                $this->view('users/login');
            }

        }


