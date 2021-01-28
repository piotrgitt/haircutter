<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class FrontPageCtrl {
    
    public function action_show_front_page() {
		        
        $variable = 123;
        
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("front_page_view.tpl");
        
    }
    
}
