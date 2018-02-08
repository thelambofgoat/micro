<?php

namespace App\Libraries;

use PDO;
use PDOException;

class Connection {

    const ERROR_BAD_CONFIGURATION = "Error: bad configuration";
    public $conn;

    public function __construct($config)
    {
        try {
            $dsn = sprintf('mysql:host=%s;dbname=%s', $config['host'], $config['database']);
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ];
            $this->conn = new PDO($dsn, $config['user'], $config['password'], $options);
        } catch (PDOException $e) {
            print "Error!" . $e->getMessage();
            die();
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

}