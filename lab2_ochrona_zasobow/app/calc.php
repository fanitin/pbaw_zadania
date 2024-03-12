<?php
require_once dirname(__FILE__) . '/../config.php';


function getParams(&$kwota, &$years, &$proc){
    $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $proc = isset($_REQUEST['proc']) ? $_REQUEST['proc'] : null;
}

//sprawdzanie poprawnego podania wartosci
function validate(&$kwota, &$years, &$proc, &$messages){
    if(!(isset($kwota)&&isset($years)&&isset($proc))){
        $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
        return false;
    }

    if($kwota == ''){
        $messages[] = 'Nie podano kwoty.';
    }
    if ($years == '') {
        $messages[] = 'Nie podano ilośći lat.'; 
    }
    if ($proc == '') {
        $messages[] = 'Nie podano oprocentowania.';
    }
    if(!empty($messages)){
        return false;
    }
    if (!is_numeric($kwota)) {
        $messages[] = 'Kwota nie jest liczbą.';
    }
    if (!is_numeric($years)) {
        $messages[] = 'Ilość lat nie jest liczbą.';
    }
    if (!is_numeric($proc)) {
        $messages[] = 'Iprocentowanie nie jest liczbą.';
    }
    if(!empty($messages)){
        return false;
    }else{
        return true;
    }
}

function procces(&$kwota, &$years, &$proc, &$messages, &$result){
    $kwota = intval($kwota);
    $years = intval($years);
    $proc = floatval($proc);

    $result = $kwota + ($kwota * $proc * $years/100);
}

$kwota = null;
$years = null;
$proc = null;
$messages = array();

getParams($kwota, $years, $proc);
if(validate($kwota, $years, $proc, $messages)){
    procces($kwota, $years, $proc, $messages, $result);
}


include 'calc_view.php';