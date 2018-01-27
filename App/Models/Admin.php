<?php


namespace App\Models;

class Admin
{

    protected $dataBase;

    public function __construct()
    {
        $this->dataBase = new \App\Models\DB();
    }

    public function deleteRecord()
    {
        $this->dataBase->execute('DELETE FROM guestbook WHERE id = ')
    }
}