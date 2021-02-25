<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class ReservationCtrl {
    
    
    
    public function validate(){
        
       return !App::getMessages()->isError();
    }
    
    public function getParams(){
        $this->form->date_time = \core\ParamUtils::getFromRequest('date_time');
        $this->form->marked_services = \core\ParamUtils::getFromRequest('x1');
        
        
    }
    
    public function action_my_reservations() {   
        $this->process();
        $this->generateView();
    }
    
    public function action_delete_reservation() {   
        $this->showServices();
        $this->generateView();
    }
    
    public function action_process() {   
        if($this->validate()){
            try {
            $this->form->services = App::getDB()->select("reservation", [
                "id_reservation",
                "time",
                "id_service",
                "id_user",
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
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("my_reservations.tpl");    
    }
}
