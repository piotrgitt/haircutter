<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class ThanksCtrl {
    
    public function action_thanks() {   
        $this->generateView();
    }
    
    
    public function generateView()
    {
        App::getSmarty()->assign("role",\core\SessionUtils::load("role", $keep = true));    
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("thanks.tpl");    
    }
}
