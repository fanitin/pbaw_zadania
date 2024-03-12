<?php
require_once dirname(__FILE__) . '/../config.php';


$kwota = $_REQUEST['kwota'];
$years = $_REQUEST['years'];
$proc = $_REQUEST['proc'];

//sprawdzanie poprawnego podania wartosci
if(!(isset($kwota)&&isset($years)&&isset($proc))){
    $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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

//walidacja danych
if (empty($messages)) {
    if (!is_numeric($kwota)) {
        $messages[] = 'Kwota nie jest liczbą.';
    }
    if (!is_numeric($years)) {
        $messages[] = 'Ilość lat nie jest liczbą.';
    }
    if (!is_numeric($proc)) {
        $messages[] = 'Iprocentowanie nie jest liczbą.';
    }
}

//wykonanie obliczen
if (empty($messages)) {
    $kwota = intval($kwota);
    $years = intval($years);
    $proc = floatval($proc);

    $result = $kwota + ($kwota * $proc * $years/100);
}

include 'calc_view.php';