<?php


class Connection {

    const ERROR_BAD_CONFIGURATION = "Error: bad configuration";
    public $conn;

    public function __construct(array $conf)
    {
        if (!isset($conf['driver'])) {
            throw new Exception(self::ERROR_BAD_CONFIGURATION);
        }
        $dsn = $this->getDsn($conf);
    }

    private function getDsn(DsnProvider $dsnProvider)
    {
        return $dsnProvider->getDsn();
    }


}