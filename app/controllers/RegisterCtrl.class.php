<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;



class RegisterCtrl {
    
    private $registerForm;
    
    public function action_register() {   
        $this->getParams();
        if($this->validate()){
           try {
                
                App::getDB()->insert("user", [
                            "name" => $this->registerForm->name,
                            "phone_number" => $this->registerForm->phone_number,
                            "e_mail" => $this->registerForm->e_mail,
                            "address" => "Warszawa, Dębowa 33a",
                            "login" => $this->registerForm->login,
                            "password" => $this->registerForm->password,
                            "role" => "user"
                ]);
                
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas zapisu rekordów rejestracji');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        
        $this->generateView();
    }
    
    public function getParams(){
        $this->registerForm = new \app\Forms\RegisterForm();
        
        $this->registerForm->login = \core\ParamUtils::getFromRequest('login');
        $this->registerForm->password = \core\ParamUtils::getFromRequest('password');  
        $this->registerForm->password_confirmation = \core\ParamUtils::getFromRequest('password_confirmation');
        $this->registerForm->name = \core\ParamUtils::getFromRequest('name');
        $this->registerForm->e_mail = \core\ParamUtils::getFromRequest('e_mail');
        $this->registerForm->phone_number = \core\ParamUtils::getFromRequest('phone_number');
    }
    
    public function validate(){
        
        return true;
    }
    
    
    public function generateView()
    {
        App::getSmarty()->assign("login", $this->registerForm->login);
        App::getSmarty()->assign("password", $this->registerForm->password);
        App::getSmarty()->assign("password_confirmation", $this->registerForm->password_confirmation);
        App::getSmarty()->assign("name", $this->registerForm->name);
        App::getSmarty()->assign("e_mail", $this->registerForm->e_mail);
        App::getSmarty()->assign("phone_number", $this->registerForm->phone_number);
        
 
        App::getSmarty()->assign("role",\core\SessionUtils::load("role", $keep = true));    
        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("register.tpl");    
    }
}
