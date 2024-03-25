<?php
require_once dirname(__FILE__) . '/../config.php';
require_once _ROOT_PATH.'/smarty/libs/Smarty.class.php';


function getParams(&$form){
    $form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    $form['proc'] = isset($_REQUEST['proc']) ? $_REQUEST['proc'] : null;
}

//sprawdzanie poprawnego podania wartosci
function validate(&$form, &$infos, &$messages, &$hide_intro){

    if(!(isset($form['kwota']) && isset($form['years']) && isset($form['proc']))) return false;
    $hide_intro = true;
    $infos [] = "Przekazano parametry.";

    if($form['kwota'] == "") $messages[] = "Nie podano kwoty.";
    if($form['years'] == "") $messages[] = "Nie podano ilośći lat.";
    if($form['proc'] == "")  $messages[] = "Nie podano oprocentowania.";

    if ( count($messages)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $form['kwota'] )) $messages [] = 'Kwota nie jest liczbą';
		if (! is_numeric( $form['years'] )) $messages [] = 'Ilość lat nie jest liczbą';
        if (! is_numeric( $form['proc'] )) $messages [] = 'Oprocentowanie nie jest liczbą';
	}

    if (count($messages)>0) return false;
	else return true;
}

//wykonanie obliczen
function process(&$form,&$infos,&$messages,&$result){
    $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';

    $form['kwota'] = floatval($form['kwota']);
    $form['years'] = floatval($form['years']);
    $form['proc'] = floatval($form['proc']);

    $result = ($form['kwota'] + ($form['kwota'] * $form['proc']/100)) / ($form['years']*12);
}

//iniczalizacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}


// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Szablonowanie');
$smarty->assign('page_description','Lab 03 - szablonowanie Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.html');