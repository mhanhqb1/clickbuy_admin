<?php
use App\Lib\Api;
use Cake\Core\Configure;

$isAdmin = isset($this->AppUI['is_admin']) && $this->AppUI['is_admin'] == 1 ? 1 : 0;

if (empty($isAdmin) && $this->request->is('post')) {
    $param = $this->request->data();
    foreach ($param as $key => $value) {
        if (is_scalar($value)) {
            $param[$key] = trim($value);
        }
    }
    $data = Api::call(Configure::read('API.url_withdraws_request'), $param);
    $error = Api::getError();
    if (!empty($error)) {
        $errMessage = $this->parseError($error);
        $this->Flash->error(__($errMessage));
    } else {
        $this->Flash->success(__('Gửi yêu cầu thành công'));
    }
    return $this->redirect("{$this->BASE_URL}");
}
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
$statusConfig = Configure::read('Config.withDrawStatus');

$this->set(compact(
    'data',
    'isAdmin',
    'statusConfig'
));