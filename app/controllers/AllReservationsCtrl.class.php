<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;




class AllReservationsCtrl {
    
    private $id_user;
    private $reservations;
    private $services;
    private $role;
    private $id_reservation;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new \app\Forms\ReservationForm();
    }
    
    public function validate(){    
	return !App::getMessages()->isError();
    }
    
    public function getParams(){
        $this->id_user = \core\SessionUtils::load("id_user", $keep = true);
        $this->role = \core\SessionUtils::load("role", $keep = true);
        $this->id_reservation = \core\ParamUtils::getFromRequest('reservation');
        
    }
    
    public function action_all_reservations() {   
        $this->getParams();
        $this->getMyReservations();
        $this->generateView();
    }
    
    public function action_delete_admin_reservation() {   
       if($this->validate()){
           print($this->id_reservation);
            try {
            $this->reservations = App::getDB()->delete("reservation", [
                "AND" => [
                        "id_reservation" => $this->id_reservation
                ]
            ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        } 
        $this->action_all_reservations();
    }
    
    
   
    public function getMyReservations() {  

        if($this->validate()){
            try {
            $this->reservations = App::getDB()->select("reservation", 
                [
                    "[>]service" => "id_service",
                    "[>]user" => "id_user"
                ],[
                    
                    "reservation.id_reservation", 
                    "reservation.time",
                    "reservation.id_service",
                    "reservation.id_user",
                    "service.service_name",
                    "service.service_time",
                    "user.name",
                    "user.phone_number",
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
        App::getSmarty()->assign("role", $this->role);
        App::getSmarty()->assign("reservations", $this->reservations);
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("all_reservations.tpl");    
    }
}
