<?php


namespace App\Models;

class Admin
{

    protected $dataBase;

    public function __construct()
    {
        $this->dataBase = new \App\Models\DB();
    }

    public function deleteRecord($id)
    {
        $this->dataBase->execute('DELETE FROM guestbook WHERE id = :id', [':id' => $id]);
    }

    public function addPhoto()
    {
        if (isset($_FILES['file'])) {
            if (0 == $_FILES['file']['error']) {
                if ('image/png' == $_FILES['file']['type'] || 'image/jpeg' == $_FILES['file']['type']){
                    move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/../../assets/images/temp/' . $_FILES['file']['name']);
                    $this->dataBase->execute('INSERT gallery (path) VALUES (\'assets/images/temp/' . $_FILES['file']['name'] . '\')');
                    return true;
                }else return false;
            }else return false;
        }else return false;
    }

    public function changeAboutMe($text)
    {
        return $this->dataBase->execute("UPDATE about SET aboutme = '$text'");
    }
}
