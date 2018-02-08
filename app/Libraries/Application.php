<?php
namespace App\Libraries;
use App\Libraries\Connection;

class Application {
    private $conn;

    public function __construct($config)
    {
        $this->conn = new Connection($config['db']['params']);
    }

    public function __toString()
    {
        return "I am an application";
    }
}