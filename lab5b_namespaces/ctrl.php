<?php
require_once 'init.php';


switch ($action) {
    default:
        require_once "app/controll/CalcCtrl.class.php";
        $ctrl = new app\controll\CalcCtrl();
        $ctrl->genView();
        break;

    case "CalcKred":
        require_once "app/controll/CalcCtrl.class.php";
        $ctrl = new app\controll\CalcCtrl();
        $ctrl->process();
        break;
}
