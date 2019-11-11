<?php

use App\Lib\Api;
use Cake\Core\Configure;

// Valdate and login
if ($this->request->is('post')) {
    // Trim data
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    // Call API to Login
    $param = array(
        'account' => $data['account'],
        'password' => $data['password'],
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'address' => $data['address']
    );
    $user = Api::call(Configure::read('API.url_customers_register'), $param);
    if (Api::getError() || empty($user)) {
        $this->Flash->error(__('Đăng ký không thành công'));
    } else {
        // Auth
        unset($user['password']);
        $user['display_name'] = $user['name'];
        if (empty($user['avatar'])) {
            $user['avatar'] = $this->BASE_URL . '/img/' . Configure::read('default_avatar');
        }
        $this->Auth->setUser($user);
        return $this->redirect($this->Auth->redirectUrl());
    }
}
