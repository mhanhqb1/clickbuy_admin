<?php
/* 
 * Production's Config
 */

use Cake\Core\Configure;

define('USE_SUB_DIRECTORY', '');

Configure::write('API.Host', 'http://apicb.hoanganhonline.com/public/');
Configure::write('Config.HTTPS', false);

Configure::write('Config.CKeditor', array(
    'basel_dir'=>'/home/lyonabea/img.lyonabeauty.com/',
    'basel_url'=>'https://img.lyonabeauty.com/'
));
