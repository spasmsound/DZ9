<?php

class Authorization
{

    protected $dataBase;

    public function __construct()
    {
        require __DIR__ . '/DB.php';
        $this->dataBase = new DB();
    }


    public function checkPassword($login, $password)
    {
        $data = $this->dataBase->query('SELECT * FROM users WHERE username = :username', [':username' => $login]);
        foreach ($data as $value) {
            if (password_verify($password, $value['password'])) {
                return true;
            } else return false;
        }
    }

    public function getCurrentUser()
    {
        if(empty($_SESSION)){
            return null;
        }else return $_SESSION['username'] ?? null;
    }
}