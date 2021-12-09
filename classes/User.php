<?php

include_once __DIR__ . "/GeneralFunction.php";

class User {

    use GeneralFunction;

    private $userName = "";
    protected $password = "";
    private $email ="";
    private $sconto = "";
    protected $paymentMethod = array();
    

    function __construct($_userName, $_password, $_email){
        
        try{
            $this -> setUserName($_userName);
        } catch(Exception $e) {
            echo "Errore: " . $e-> getMessage() . "<br>";
        }
        
        try{
            $this -> setPassword($_password);
        }catch(Exception $e) {
            echo "C'è stato un problema: " . $e -> getMessage() . "<br>";
        }
        
        try{
            $this -> setEmail($_email);
        }catch(Exception $e) {
            echo "C'è un errore: " . $e -> getMessage() . "<br>";
        }
    }


/****************** FUNZIONI SET ****************/

    public function setUserName($newUserName) {
        $this->checkString($newUserName);
        $this -> userName = $newUserName;
    }

    public function setPassword($newPassword) {
        
        if (is_null($newPassword) || is_numeric($newPassword) || strlen($newPassword) < 8 || $this->checkSpecialCar($newPassword) === "false" ) {
            throw new Exception("Errore nell'impostazione della password");
             
        }

        $this -> password = $newPassword;
    }

    public function setEmail($newEmail) {

        if (strlen($newEmail)<8) {
            throw new Exception("Email non valida, length < 8");
        }
        if (!strstr($newEmail, '@')) {
            throw new Exception("Email non valida, miss @");
        }

        $domainEmail = substr($newEmail, strpos($newEmail, "@") + 1);
        var_dump(($domainEmail));

        if (!strpos($domainEmail, '.')){
            throw new Exception("Email non valida, miss dot after @");
        }

        $domain = substr($domainEmail, strpos($domainEmail, "@"), strpos($domainEmail, "."));
        var_dump($domain);

        if ($this->checkDomainEmail($domain) === "false") {

            throw new Exception("Email non valida, domain unknown");
        }

        $countryEmail = substr($domainEmail, strpos($domainEmail, ".") + 1);
        var_dump($countryEmail);
        
        if ($this->checkCountryEmail($countryEmail) === "false") {
            throw new Exception("Email non valida, country unknown");
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