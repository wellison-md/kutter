<?php

namespace Wellison\Kutter\Views;

class View {
    
    private function __construct() {}
    
    public static function render(string $view, $payload = []): void {
        \extract($payload);
        
        $view = __DIR__ . "/" . ucfirst($view) . ".php";
        
        require __DIR__ . "/Layouts/App.php";
    }
}
