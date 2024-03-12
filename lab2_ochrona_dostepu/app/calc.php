<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/secure/check.php';

function getParams(&$kwota, &$years, &$proc){
    $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $proc = isset($_REQUEST['proc']) ? $_REQUEST['proc'] : null;
}

//sprawdzanie poprawnego podania wartosci
function validate(&$kwota, &$years, &$proc, &$messages){
    if(!(isset($kwota)&&isset($years)&&isset($proc))){
        return false;
    }

    if($kwota == ""){
        $messages[] = 'Nie podano kwoty.';
    }
    if ($years == "") {
        $messages[] = 'Nie podano ilośći lat.'; 
    }
    if ($proc == "") {
        $messages[] = 'Nie podano oprocentowania.';
    }
    if(count ( $messages ) != 0){
        return false;
    }
    if (!is_numeric($kwota)) {
        $messages[] = 'Kwota nie jest liczbą.';
    }
    if (!is_numeric($years)) {
        $messages[] = 'Ilość lat nie jest liczbą.';
    }
    if (!is_numeric($proc)) {
        $messages[] = 'Oprocentowanie nie jest liczbą.';
    }
    if(count ( $messages ) != 0){
        return false;
    }else{
        return true;
    }
}

function process(&$kwota, &$years, &$proc, &$messages, &$result){
    global $role;

    $kwota = intval($kwota);
    $years = intval($years);
    $proc = floatval($proc);

    if($proc < 8 && $role <> 'admin'){
        $messages [] = "Tylko administrator może pracować z kredytem, oprocentowanie którego jest poniżej 8%.";
    }
    if($kwota > 100000 && $role <> 'admin'){
        $messages [] = "Tylko administrator może pracować z kredytem, kwota którego jest wyższa niż 100 000 PLN";
    }else{
        $result = $kwota + ($kwota * $proc * $years/100);
    }
}

$kwota = null;
$years = null;
$proc = null;
$result = null;
$messages = array();

getParams($kwota, $years, $proc);
if(validate($kwota, $years, $proc, $messages)){
    process($kwota, $years, $proc, $messages, $result);
}


include 'calc_view.php';