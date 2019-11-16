<?php
use App\Lib\Api;
use Cake\Core\Configure;

$this->doGeneralAction();
$pageSize = Configure::read('Config.PageSize');

// Create breadcrumb
$pageTitle = __('Yêu cầu rút tiền');
$this->Breadcrumb->setTitle($pageTitle)
        ->add(array(
            'name' => $pageTitle,
        ));

// Create search form
$dataSearch = array(
    'disable' => 0, 
    'limit' => $pageSize
);
$this->SearchForm
        ->setAttribute('type', 'get')
        ->setData($dataSearch)
        ->addElement(array(
            'id' => 'name',
            'label' => __('LABEL_NAME')
        ))
        ->addElement(array(
            'id' => 'status',
            'label' => __('LABEL_STATUS'),
            'options' => array(
                '' => 'Tất cả',
                0 => 'Chờ xét duyệt',
                1 => 'Thành công',
                2 => 'Thất bại'
            )
        ))
        ->addElement(array(
            'id' => 'limit',
            'label' => __('LABEL_LIMIT'),
            'options' => Configure::read('Config.searchPageSize'),
        ))
        ->addElement(array(
            'type' => 'submit',
            'value' => __('LABEL_SEARCH'),
            'class' => 'btn btn-primary',
        ));

$param = $this->getParams(array(
    'limit' => $pageSize,
    'disable' => 0
));

$result = Api::call(Configure::read('API.url_withdraws_list'), $param);
$total = !empty($result['total']) ? $result['total'] : 0;
$data = !empty($result['data']) ? $result['data'] : array();

$statusConfig = Configure::read('Config.withDrawStatus');
foreach ($data as &$v) {
    $className = $statusConfig[$v['status']]['label'];
    $statusName = $statusConfig[$v['status']]['name'];
    $v['status_txt'] = "<span class='label ".$className."'>".$statusName."</span>";
    $v['phone'] = "<a href='tel:".$v['phone']."'>".$v['phone']."</a>";
}

// Show data
$this->SimpleTable
        ->setDataset($data)
        ->addColumn(array(
            'id' => 'item',
            'name' => 'items[]',
            'type' => 'checkbox',
            'value' => '{id}',
            'width' => 20,
        ))
        ->addColumn(array(
            'id' => 'amount',
            'title' => __('Số tiền'),
            'type' => 'currency',
            'width' => 120,
            'empty' => 0
        ))
        ->addColumn(array(
            'id' => 'name',
            'title' => __('LABEL_NAME'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'card_number',
            'title' => __('Số tài khoản'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'bank_name',
            'title' => __('Ngân hàng'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'phone',
            'title' => __('LABEL_TEL'),
            'empty' => ''
        ))
        ->addColumn(array(
            'id' => 'created',
            'type' => 'dateonly',
            'title' => __('LABEL_CREATED'),
            'width' => 100,
            'empty' => '',
        ))
        ->addColumn(array(
            'id' => 'status_txt',
            'title' => __('LABEL_STATUS')
        ))
//        ->addColumn(array(
//            'type' => 'link',
//            'title' => __('LABEL_EDIT'),
//            'href' => $this->BASE_URL . '/' . $this->controller . '/update/{id}',
//            'button' => true,
//            'width' => 50,
//        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('Chấp nhận'),
            'class' => 'btn btn-info btn-accept',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('Đã chuyển tiền'),
            'class' => 'btn btn-success btn-tranfer',
        ))
        ->addButton(array(
            'type' => 'submit',
            'value' => __('Từ chối'),
            'class' => 'btn btn-danger btn-deny',
        ));
//        ->addColumn(array(
//            'id' => 'disable',
//            'type' => 'checkbox',
//            'title' => __('LABEL_DELETE'),
//            'toggle' => true,
//            'toggle-onstyle' => "primary",
//            'toggle-offstyle' => "danger",
//            'toggle-options' => array(
//                "data-on" => __("LABEL_ENABLE"),
//                "data-off" => __("LABEL_DELETE"),
//            ),
//            'rules' => array(
//                '0' => '',
//                '1' => 'checked'
//            ),
//            'empty' => 0,
//            'width' => 50,
//        ));

$this->set('pageTitle', $pageTitle);
$this->set('total', $total);
$this->set('param', $param);
$this->set('limit', $param['limit']);
$this->set('data', $data);
