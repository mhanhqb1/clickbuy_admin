<?php
use App\Lib\Api;
use Cake\Core\Configure;

$isAdmin = isset($this->AppUI['is_admin']) && $this->AppUI['is_admin'] == 1 ? 1 : 0;
// Create breadcrumb
$pageTitle = __('LABEL_DASHBOARD');
$this->Breadcrumb->setTitle($pageTitle)
    ->add(array(
        'name' => $pageTitle,
    ));

$param = array(
    'is_admin' => $isAdmin
);
$data = Api::call(Configure::read('API.url_reports_general'), $param);

$this->set(compact(
    'data',
    'isAdmin'
));