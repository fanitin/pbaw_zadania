<?php
require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
    default:
        control('app\\controll', 'CalcCtrl', 'genView', ['user', 'admin']);

    case 'login':
        control('app\\controll', 'LoginCtrl', 'doLogin');

    case 'CalcKred':
        control('app\\controll', 'CalcCtrl', 'process', ['user', 'admin']);
    
    case 'logout':
        control('app\\controll', 'LoginCtrl', 'doLogout', ['user', 'admin']);
}

