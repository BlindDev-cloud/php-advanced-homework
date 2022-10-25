<?php

interface Database
{
    public function getData();
}

class Mysql implements Database
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(Database $db)
    {
        $this->adapter = $db;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}