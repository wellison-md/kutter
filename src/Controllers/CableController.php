<?php

namespace Wellison\Kutter\Controllers;

use \Wellison\Kutter\Services\CableService;

class CableController {

    private CableService $service;

    public function __construct() {
        $this->service = new CableService();
    }

    public function index() {
        
        $cables = $this->service->findAll();

        require __DIR__ . "/../Views/Cables.php";
    }
}
