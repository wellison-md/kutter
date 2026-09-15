<?php

namespace Wellison\Kutter\Repositories;

use Wellison\Kutter\Db\Connection;

class CableRepository {

    private Connection $conn;

    public function __construct() {
        $this->conn = new Connection();
    }

    /**
     *  List all Cables ordered by section and color
     * 
     * @return 
     */
    public function findAll() {
        $sql = <<< SQL
        SELECT
            id
            ,description
            ,section
            ,section_unit
            ,color
            ,size
            ,strip_a
            ,strip_b
        FROM
            cables
        ORDER BY
            section
            ,section_unit
            ,color
        SQL;

        return $this->conn->get()->query($sql)->fetchAll();
    }
}
