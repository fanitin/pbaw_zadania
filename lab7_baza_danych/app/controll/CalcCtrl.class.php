<?php
namespace app\controll;

use app\forms\CalcForm;
use app\outpt\CalcRes;
use app\controll\OperationEditCtrl;


class CalcCtrl{
    private $form;
    private $result;
    private $oper;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcRes();
        $this->oper = new OperationEditCtrl();
    }
    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
        $this->form->proc = getFromRequest('proc');
        $this->form->years = getFromRequest('years');
        $this->form->numer = getFromRequest('numer');
    }

    public function validate(){
        if(!(isset($this->form->kwota) && isset($this->form->years) && isset($this->form->proc))) return false;
        getMessages()->addInfos ("Przekazano parametry.");

        if($this->form->kwota == "") getMessages()->addErrors("Nie podano kwoty.");
        if($this->form->years == "") getMessages()->addErrors("Nie podano ilośći lat.");
        if($this->form->proc == "")  getMessages()->addErrors("Nie podano oprocentowania.");
        if($this->form->numer == "") getMessages()->addErrors("Nie podano numeru telefonu.");

        if (!getMessages()->isErrors()) {
            if (! is_numeric( $this->form->kwota )) getMessages()->addErrors('Kwota nie jest liczbą');
            if (! is_numeric( $this->form->proc )) getMessages()->addErrors('Ilość lat nie jest liczbą');
            if (! is_numeric( $this->form->years )) getMessages()->addErrors('Oprocentowanie nie jest liczbą');
            if((preg_match("/^\+48[0-9]{9}$/", $this->form->numer)) === 0){
                getMessages()->addErrors('Numer nie odpowiada formatu.');
            }
        }

        return !getMessages()->isErrors();
    }

    public function action_calcCompute(){
        $this->getParams();

        if($this->validate()){
            $this->form->kwota = intval($this->form->kwota);
            $this->form->proc = floatval($this->form->proc);
            $this->form->years = intval($this->form->years);
            getMessages()->addInfos('Parametry poprawne.');

            $this->result->res = ($this->form->kwota + ($this->form->kwota * $this->form->proc/100)) / ($this->form->years*12);

            getMessages()->addInfos("Wykonano obliczenia.");
            $this->sendToOEForm();
            $this->oper->action_operationSave();
        }
        $this->genView();
    }

    public function action_calcShow(){
        getMessages()->addInfos("Witaj w kalkulatorze");
        $this->genView();
    }
    public function genView(){
		
		getSmarty()->assign('page_title','Lab_07');
		getSmarty()->assign('page_description','Moja apka z bazą danych');
		getSmarty()->assign('page_header','Laboratorium 7');
				
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('result',$this->result);
		
		getSmarty()->display('CalcView.tpl');
    }

    public function sendToOEForm(){
        $this->oper->form->kwota = $this->form->kwota;
        $this->oper->form->years = $this->form->years;
        $this->oper->form->procent = $this->form->proc;
        $this->oper->form->phone = $this->form->numer;
        $this->oper->form->wynik = $this->result->res;
        $this->oper->form->data = date('Y-m-d H:i:s');
    }
}