<?php

require '../php-oop-2/generalFunction.php';
include 'Creditcard.php';

class User {
    public $userName = "";
    public $password = "";
    public $email ="";
    public $sconto = "";
    public $paymentMethod = array();
    

    function __construct($_userName, $_password, $_email){
        $this -> setUserName($_userName);
        $this -> setPassword($_password);
        $this -> setEmail($_email);
    
    }


/****************** FUNZIONI SET ****************/

    public function setUserName($newUserName) {
        if (is_null($newUserName) || is_numeric($newUserName) || strlen($newUserName) < 6) { 
            exit("Username non valido");
        }
        $this -> userName = $newUserName;
    }

    public function setPassword($newPassword) {
        
        if (is_null($newPassword) || is_numeric($newPassword) || strlen($newPassword) < 8 || checkSpecialCar($newPassword) === "false" ) {
            exit ("Errore nell'impostazione della password");
        }

        $this -> password = $newPassword;
    }

    public function setEmail($newEmail) {

        if (strlen($newEmail)<8) {
            exit("Email non valida, length < 8");
        }
        if (!strstr($newEmail, '@')) {
            exit("Email non valida, miss @");
        }

        $domainEmail = substr($newEmail, strpos($newEmail, "@") + 1);
        var_dump(($domainEmail));

        if (!strpos($domainEmail, '.')){
            exit("Email non valida, miss dot after @");
        }

        $domain = substr($domainEmail, strpos($domainEmail, "@"), strpos($domainEmail, "."));
        var_dump($domain);

        if (checkDomainEmail($domain) === "false") {

            exit("Email non valida, domain unknown");
        }

        $countryEmail = substr($domainEmail, strpos($domainEmail, ".") + 1);
        var_dump($countryEmail);
        
        if (checkCountryEmail($countryEmail) === "false") {
            exit("Email non valida, country unknown");
        }

        $this -> email = $newEmail;
    }


/****************** FUNZIONI GET ****************/

    public function getUsername(){
        return $this -> userName;
    }

    public function getPassword(){
        return $this -> password;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function getPaymentMethod(){
        return $this -> paymentMethod;
    }
}



?>