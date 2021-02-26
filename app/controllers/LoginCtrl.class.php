<?php
namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class LoginCtrl {
    private $users;
    private $role;
    private $id_user;
    
    private $form;
    
     public function __construct() {
        $this->form = new \app\Forms\LoginForm();
    }
    
    
    public function action_login() {  
        
        if($this->validate()){
           \core\SessionUtils::store("role", $this->role);
           \core\SessionUtils::store("id_user", $this->id_user);
           \core\RoleUtils::addRole($this->role);
           App::getRouter()->redirectTo("show_front_page"); 
        }
        $this->generateView();
    }
    
    
    
    
    public function action_logout(){        
        session_destroy();
        App::getRouter()->redirectTo("show_front_page");
        
        
    }
     public function getParams(){
        $this->form->login = \core\ParamUtils::getFromRequest('login');
        $this->form->password = \core\ParamUtils::getFromRequest('password');  
        
        
    }
    
    
    public function validate(){
        
            $this->getParams();  //GETTING PARAMS FROM FORM
            
            if(isset($this->form->login) && isset( $this->form->password)){
            
                //GETTING USERS DATA FROM DATABASE
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
                
                
                
                //LOOPING TROUGHT USERS
                foreach($this->users as $user){
                    if(($user["login"])==$this->form->login && $user["password"]==$this->form->password){
                       $this->role = $user["role"];
                       $this->id_user = $user["id_user"];
                       return true;
                    }

                }
                return false; 
            }
        
    }
    
    public function generateView()
    {
        App::getSmarty()->assign("role",\core\SessionUtils::load("role", $keep = true));    
        App::getSmarty()->assign("login",$this->form->login);
        App::getSmarty()->assign("password",$this->form->password);

        App::getSmarty()->assign("action_url",App::getConf()->action_url);      
        App::getSmarty()->assign("app_url",App::getConf()->app_root);        
        App::getSmarty()->display("login.tpl");    
    }
}
?>