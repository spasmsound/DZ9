<?php

namespace App\Models;

class DB
{

    protected $dsn;
    protected $dbh;
    protected $cfg;

    public function __construct()
    {
        $this->cfg = require __DIR__ . '/../../config/config.php';
        $this->dsn = 'mysql:host=' . $this->cfg['host'] . ';dbname=' . $this->cfg['dbname'] . ';charset=' . $this->cfg['charset'];
        $this->dbh = new \PDO($this->dsn, $this->cfg['username'], $this->cfg['password']);
    }

    public function execute(string $sql, array $data = [])
    {
        if ($this->dbh->prepare($sql)->execute($data)) {
            return true;
        }else return false;
    }

    public function query(string $sql, array $data = [])
    {
        $request = $this->dbh->prepare($sql);
        if ($request->execute($data)) {
            return $request->fetchAll(\PDO::FETCH_ASSOC);
        }else return false;
    }
}