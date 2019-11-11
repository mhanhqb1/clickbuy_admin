<?php

namespace App\Controller;

use Cake\Event\Event;

/**
 * Login page
 */
class RegisterController extends AppController {
    
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    /**
     * Login page
     */
    public function index() {
        include ('Bus/Register/index.php');
    }
}
