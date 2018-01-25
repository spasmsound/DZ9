<?php

class Login
{

    protected $dataBase;

    public function __construct()
    {
        require __DIR__ . '/DB.php';
        $this->dataBase = new DB();
    }

    public function existsUser($login)
    {
        $users = $this->dataBase->query('SELECT username FROM users');
        foreach ($users as $key => $value) {
            $newarray[$value['username']] = $value;
        }

        if (array_key_exists($login, $newarray)) {
            return true;
        }else return false;
    }

    public function checkPassword($login, $password)
    {

    }
}