<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'clickbuydanang');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_admins_login', 'admins/login');
Configure::write('API.url_admins_updateprofile', 'admins/updateprofile');

Configure::write('API.url_customers_list', 'customers/list');
Configure::write('API.url_customers_addupdate', 'customers/addupdate');
Configure::write('API.url_customers_register', 'customers/register');
Configure::write('API.url_customers_detail', 'customers/detail');
Configure::write('API.url_customers_all', 'customers/all');
Configure::write('API.url_customers_login', 'customers/login');

Configure::write('API.url_reports_general', 'reports/general');

Configure::write('API.url_orders_list', 'orders/list');
Configure::write('API.url_orders_detail', 'orders/detail');
Configure::write('API.url_orders_addupdate', 'orders/addupdate');

Configure::write('API.url_withdraws_request', 'withdraws/request');
Configure::write('API.url_withdraws_list', 'withdraws/list');
Configure::write('API.url_withdraws_updatestatus', 'withdraws/updatestatus');