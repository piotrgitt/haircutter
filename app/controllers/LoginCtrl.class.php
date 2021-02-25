<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class LoginCtrl {
    private $users;
    private $form;
    
     public function __construct() {
        $this->form = new \app\Forms\LoginForm();
    }
    
    
    public function action_login() {  
        $this->generateView();
        if($this->validate()){
           \core\RoleUtils::addRole($this->rola);
            App::getRouter()->redirectTo("showFrontPage"); 
        }
    }
    
    
    
    
    public function action_logout(){
        
        session_destroy();
        App::getRouter()->redirectTo("showFrontPage");
        
        
    }
     public function getParams(){
        $this->form->login = \core\ParamUtils::getFromRequest('login');
        $this->form->password = \core\ParamUtils::getFromRequest('password');  
        print($this->form->login);
        
    }
    
    
    public function validate(){
        
            $this->getParams();
            if(isset($this->form->login) && isset( $this->form->password)){
                try {
                    $this->users = App::getDB()->select("user", [
                        "id_user",
                        "name",
                        "phone_number",
                        "address",
                        "e_mail",
                        "login",
                        "password",
                        "role"
                            ]);
                    } catch (\PDOException $e) {
                        Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                        if (App::getConf()->debug)
                            Utils::addErrorMessage($e->getMessage());
                }
                
                
                
                
                foreach($users as $user){
                    if($user["login"]==$this->form->login && $user["password"]==$this->form->password){
                        return true;
                    }
                }
                return false; 
            }
        
    }
    
    public function generateView()
    {
        
        App::getSmarty()->assign("login",$this->form->login);
        App::getSmarty()->assign("password",$this->form->password);

        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("login.tpl");    
    }
}
