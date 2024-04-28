<?php
namespace app\controll;
use app\forms\OperationSearchForm;
use PDOException;

class OperationListCtrl{
    private $form;
    private $records;
    public $sort_type = 'id_wynik';
    public $sort_updown = 'ASC';

    public function __construct(){
        $this->form = new OperationSearchForm();
    }

    public function validate(){
        $this->form->phoneNumber = getFromRequest("search_number");
        if(getFromRequest("sort_type") != null){
            $this->sort_type = getFromRequest("sort_type");
        }
        getSmarty()->assign('sort_type', $this->sort_type);
        if(getFromRequest("sort_updown") != null){
            $this->sort_updown = getFromRequest("sort_updown");
        }
        getSmarty()->assign('sort_updown', $this->sort_updown);
        return !getMessages()->isErrors();
    }

    public function action_operationList(){
        $this->validate();

        $search_params = [];
        if(isset($this->form->phoneNumber) && strlen($this->form->phoneNumber) > 0){
            $search_params['phone[~]'] = $this->form->phoneNumber;
        }

        $where = array();
        $num_params = sizeof($search_params);
        if($num_params > 1){
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where["ORDER"] = [$this->sort_type => $this->sort_updown];

        try{
            $this->records = getDB()->select("main", [
                "id_wynik",
                "kwota",
                "years",
                "procent",
                "wynik",
                "data",
                "phone"
            ], $where);
        }catch(PDOException $e){
            getMessages()->addErrors('Wystąpił błąd podczas pobierania rekordów');
            if(getConf()->debug) getMessages()->addErrors($e->getMessage());
        }


        getSmarty()->assign('searchForm', $this->form);
        getSmarty()->assign('operations', $this->records);
        getSmarty()->assign('page_title','Lista operacji');
        getSmarty()->display('OperationsList.tpl');
    }
}