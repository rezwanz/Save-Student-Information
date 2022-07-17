<?php


namespace App\classes;


class Auth
{
    public $email;
    public $password;
    public $users = [];
//    public $

public function __construct($post = null)
{
    if ($post)
    {
        $this->email=$post['email'];
        $this->password=$post['password'];
    }
}
    public function login()
    {
        $this->users= [
          0 => [
              'id' => 1,
              'email' => 'admin@admin.com',
              'password' => '123'
          ],
          1 => [
                'id' => 2,
                'email' => 'user@user.com',
                'password' => '321'
           ],
        ];
        foreach ($this->users as $user) {
            if ($user['email']==$this->email && $user['password']==$this->password)
            {
                session_start();
                $_SESSION['id']= session_id();
                header('Location: action.php?page=dashboard');
            }
        }
        return 'Opps... something went wrong.';
    }
    public function logout()
    {
        unset($_SESSION['id']);
        header('Location: action.php?page=login');
    }
    public function index()
    {
        header('Location: action.php?page=login');
    }
}