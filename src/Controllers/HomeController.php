<?php

namespace Wellison\Kutter\Controllers;

use Wellison\Kutter\Views\View;


class HomeController {

    public function index() {
        
        View::render('home');
    }
}
