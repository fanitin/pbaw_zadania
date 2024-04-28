<?php
namespace app\controll;
use app\forms\OperationEditForm;
use PDOException;

class OperationEditCtrl{
    public $form;
    public function __construct(){
        $this->form = new OperationEditForm();
    }

    public function action_operationSave(){
        try{
                $count = getDB()->count("main");
                if($count <= 25){
                    getDB()->insert("main", [
                        "kwota" => $this->form->kwota,
                        "years" => $this->form->years,
                        "procent" => $this->form->procent,
                        "wynik" => $this->form->wynik,
                        "data" => $this->form->data,
                        "phone" => $this->form->phone
                    ]);
                }else{
                    getMessages()->addInfos("Zbyt dużo wpisów. Usuń wybrane wpisy aby dodać nowe.");
                }
            getMessages()->addInfos('Pomyślnie zapisano rekord');
        }catch(PDOException $e){
            getMessages()->addErrors('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if(getConf()->debug) getMessages()->addErrors($e->getMessage());
        }
    }

    public function validateEdit() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isErrors();
	}

    public function action_operationDelete(){
        if ( $this->validateEdit() ){
			try{
				// 2. usunięcie rekordu
				getDB()->delete("main",[
					"id_wynik" => $this->form->id
				]);
				getMessages()->addInfos('Pomyślnie usunięto rekord');
			} catch (PDOException $e){
				getMessages()->addErrors('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addErrors($e->getMessage());			
			}	
		}
        forwardTo('operationList');
    }
}