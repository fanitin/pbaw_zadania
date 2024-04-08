<?php
require_once 'init.php';


switch ($action) {
    default:
        require_once "app/controll/CalcCtrl.class.php";
        $ctrl = new CalcCtrl();
        $ctrl->genView();
        break;

    case "CalcKred":
        require_once "app/controll/CalcCtrl.class.php";
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
}
