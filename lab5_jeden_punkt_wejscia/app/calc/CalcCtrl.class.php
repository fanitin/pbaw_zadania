<?php

    require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
    require_once $conf->root_path.'/lib/Messages.class.php';
    require_once $conf->root_path.'/app/calc/CalcForm.class.php';
    require_once $conf->root_path.'/app/calc/CalcRes.class.php';


class CalcCtrl{
    private $messages;
    private $form;
    private $result;

    public function __construct(){
        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcRes();
    }

    public function getParams(){
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->proc = isset($_REQUEST['proc']) ? $_REQUEST['proc'] : null;
        $this->form->years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
    }

    public function validate(){
        if(!(isset($this->form->kwota) && isset($this->form->years) && isset($this->form->proc))) return false;
        $this->messages->addInfos ("Przekazano parametry.");

        if($this->form->kwota == "") $this->messages->addErrors("Nie podano kwoty.");
        if($this->form->years == "") $this->messages->addErrors("Nie podano ilośći lat.");
        if($this->form->proc == "")  $this->messages->addErrors("Nie podano oprocentowania.");

        if ($this->messages->isErrors()) {
            if (! is_numeric( $this->form->kwota )) $this->messages->addErrors('Kwota nie jest liczbą');
            if (! is_numeric( $this->form->proc )) $this->messages->addErrors('Ilość lat nie jest liczbą');
            if (! is_numeric( $this->form->years )) $this->messages->addErrors('Oprocentowanie nie jest liczbą');
        }

        return !$this->messages->isErrors();
    }

    public function process(){
        $this->getParams();

        if($this->validate()){
            $this->form->kwota = intval($this->form->kwota);
            $this->form->proc = floatval($this->form->proc);
            $this->form->years = intval($this->form->years);
            $this->messages->addInfos('Parametry poprawne.');

            $this->result->res = ($this->form->kwota + ($this->form->kwota * $this->form->proc/100)) / ($this->form->years*12);

            $this->messages->addInfos("Wykonano obliczenia.");
        }
        $this->genView();
    }

    public function genView(){
        global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Lab_05');
		$smarty->assign('page_description','Moja apka z jednym kontrolerem wejścia.');
		$smarty->assign('page_header','Laboratorium 5');
				
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('result',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/CalcView.html');
    }

}