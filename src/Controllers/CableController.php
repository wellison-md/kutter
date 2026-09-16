<?php

namespace Wellison\Kutter\Controllers;

use \Wellison\Kutter\Services\CableService;
use \Wellison\Kutter\Views\View;


class CableController {

    private CableService $service;

    public function __construct() {
        $this->service = new CableService();
    }

    public function index() {
        
        $cables = $this->service->findAll();

        View::render('cables', $cables);
    }
}
