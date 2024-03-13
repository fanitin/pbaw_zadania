<?php
require_once dirname(__FILE__)."/../../config.php";

function getParamsLogIn(&$form){
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['pass'] = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
}

function validateLogIn(&$form, &$messages){
    if(!(isset($form['login']) && isset($form['pass']))){
        return false;
    }

    if($form['login'] == ''){
        $messages [] = "Nie podano loginu.";
    }
    if($form['pass'] == ''){
        $messages [] = "Nie podano hasła.";
    }

    if(count($messages) > 0){
        return false;
    }

    if($form['login'] == "admin" && $form['pass'] == "admin"){
        session_start();
        $_SESSION['role'] = 'admin';
        return true;
    }
    if($form['login'] == "user" && $form['pass'] == "user"){
        session_start();
        $_SESSION['role'] = 'user';
        return true;
    }

    $messages [] = "Niepoprawne dane wejściowe";
    return false;
}

$form = array();
$messages = array();

getParamsLogIn($form);
if(!validateLogIn($form, $messages)){
    include _ROOT_PATH.'/app/secure/login_view.php';
}else{
    header("Location: "._APP_URL);
}