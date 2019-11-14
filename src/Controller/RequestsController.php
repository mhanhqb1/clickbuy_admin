<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Requests page
 */
class RequestsController extends AppController {
    
    /**
     * Requests page
     */
    public function index() {
        include ('Bus/Requests/index.php');
    }
}
