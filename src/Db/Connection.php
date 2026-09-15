<?php

namespace Wellison\Kutter\Db;

use PDO;

class Connection {

    private const DSN = __DIR__ . "/../../db.sqlite3";
    private PDO $conn;
    
    public function __construct() {
        $this->conn = new PDO(dsn: "sqlite:". self::DSN);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function get() {
        return $this->conn;
    }
}
