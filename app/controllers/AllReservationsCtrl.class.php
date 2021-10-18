<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;




class AllReservationsCtrl {
    
    private $id_user;
    private $reservations;
    private $services;
    private $role;
    private $id_reservation;
    private $form;
    
    public function __construct() {
        //stworzenie potrzebnych obiektów
        //$this->form = new \app\Forms\ReservationForm();
        $this->form = new \app\Forms\SearchForm();
    }
    
    public function validate(){    
        $this->form->surname = ParamUtils::getFromRequest('sf_surname');
	return !App::getMessages()->isError();
        
        
    }
    
    public function getParams(){
        $this->id_user = \core\SessionUtils::load("id_user", $keep = true);
        $this->role = \core\SessionUtils::load("role", $keep = true);
        $this->id_reservation = \core\ParamUtils::getFromCleanURL(1, false);
    }
    
    public function action_all_reservations() {   
        $this->getParams();
        $this->getMyReservations();
        $this->generateView();
    }
    
    public function action_all_reservations_table() {   
        $this->getParams();
        $this->getMyReservations();
        App::getSmarty()->assign("role", $this->role);
        App::getSmarty()->assign("searchForm", $this->form);
        App::getSmarty()->assign("reservations", $this->reservations);
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("all_reservations_table.tpl");   
    }
    
    
    public function action_delete_admin_reservation() {   
        $this->getParams();
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

        
        $this->validate();
        
        
        $search_params = [];
        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
        if (isset($this->form->surname) && strlen($this->form->surname) > 0) {
            $search_params['name[~]'] = '%' . $this->form->surname . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
        
        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where = &$search_params;
        $where ["ORDER"] = "name";   
        $where ["LIMIT"] = 100;

         
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
                ], $where);
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
        App::getSmarty()->assign("searchForm", $this->form);
        App::getSmarty()->assign("reservations", $this->reservations);
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("all_reservations.tpl");    
    }
}
