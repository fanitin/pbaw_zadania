<?php
require_once dirname(__FILE__) . "/../config.php";

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action) {
    default:
        require_once $conf->root_path . "/app/calc/CalcCtrl.class.php";
        $ctrl = new CalcCtrl();
        $ctrl->genView();
        break;

    case "CalcKred":
        require_once $conf->root_path . "/app/calc/CalcCtrl.class.php";
        $ctrl = new CalcCtrl();
        $ctrl->process();
        break;
}
