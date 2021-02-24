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
        $this->form->date_time = \core\ParamUtils::getFromRequest('date_time');
        $this->form->durations = \core\ParamUtils::getFromRequest('checkbox2');
        $this->form->checkboxes = \core\ParamUtils::getFromRequest('checkbox');
        
        
            foreach ($this->form->checkboxes as $checkbox){ 
            echo $checkbox."<br />";
            }  
            
//            foreach ($this->form->durations as $duration){ 
//            echo $duration."<br />";
//            }  

        
    }
    
    public function action_my_reservations() {   
        $this->showServices();
        $this->generateView();
    }
    
   
    public function showServices() {  
        if($this->validate()){
            try {
            $this->form->services = App::getDB()->select("reservation", [
                "id_reservation",
                "time",
                "duration",
                "id_service",
                "service_tags",
                "id_user"
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
        App::getSmarty()->display("my_reservations.tpl");    
    }
}
