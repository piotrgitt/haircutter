<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class ReservationCtrl {
    
    public function action_reservation() {   
        $this->generateView();
    }
    
    
    public function generateView()
    {
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("reservation.tpl");    
    }
}
