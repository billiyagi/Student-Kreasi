<?php

class DB
{
    protected $pdo;
    protected $query;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function query($query)
    {
        $this->query = $query;
        $sth = $this->pdo->prepare($query);
        return $sth;
    }
}