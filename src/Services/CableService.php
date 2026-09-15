<?php

namespace Wellison\Kutter\Services;

use \Wellison\Kutter\Repositories\CableRepository;

class CableService {

    private CableRepository $repo;

    public function __construct() {
        $this->repo = new CableRepository();
    }

    public function findAll() {
        $cables = $this->repo->findAll();

        //TODO: mapper results 
        return $cables;
    }
}
