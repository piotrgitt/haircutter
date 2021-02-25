<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;




class MyReservationsCtrl {
    
    private $form;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new \app\Forms\ReservationForm();
    }
    
    public function validate(){    
	return !App::getMessages()->isError();
    }
    
    public function getParams(){

       
    }
    
    public function action_my_reservations() {   
        $this->getMyReservations();
        
        
        $this->generateView();
    }
    
    public function action_delete_reservation() {   
        $this->form->durations = \core\ParamUtils::getFromRequest('checkbox2');
        $this->form->checkboxes = \core\ParamUtils::getFromRequest('checkbox');
        
        
            foreach ($this->form->checkboxes as $checkbox){ 
            echo $checkbox."<br />";
            }  
            
        
    }

    

   
    

   
    public function getMyReservations() {  

        if($this->validate()){
            try {
            $this->form->services = App::getDB()->select("reservation", [
                "id_reservation",
                "time",
                "id_service",
                "id_user"
                    ], [
                "id_user" => $this->form->user_id
        ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

    }
    

    
    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('reservations', $this->form->reservations);
        App::getSmarty()->assign('services', $this->form->services);
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("my_reservations.tpl");    
    }
}
