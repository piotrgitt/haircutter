<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class ReservationCtrl {
    
    private $form;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new \app\Forms\ReservationForm();
    }
    
    public function validate(){
        
       return !App::getMessages()->isError();
    }
    
    public function getParams(){
        $this->form->date_time = \core\ParamUtils::getFromRequest('date_time');
        $this->form->marked_services = \core\ParamUtils::getFromRequest('x1');
        
        
    }
    
    public function action_reservation() {   
        $this->showServices();
        $this->generateView();
    }
    
    public function action_process() {   
        $this->getParams();
        
        
        if ($this->validate()) {
            try {
                
                App::getDB()->insert("reservation", [
                            "time" => $this->form->date_time,
                            "id_service" => 1,
                            "id_user" => 1
                ]);
                
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        
        
        $this->validate();
        App::getRouter()->forwardTo('thanks');

    }
    
    public function showServices() {  
        if($this->validate()){
            try {
            $this->form->services = App::getDB()->select("service", [
                "id_service",
                "service_name",
                "service_price",
                "service_time",
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
        App::getSmarty()->assign('services', $this->form->services);
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("reservation.tpl");    
    }
}
