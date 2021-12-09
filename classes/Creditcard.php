<?php

class Creditcard extends User{

    protected $numberCard = "";
    protected $expireDate = "";
    
    

    function __construct($_numberCard, $_expireDate){
        try{
            $this -> setCreditCardNumber($_numberCard);
        }catch(Exception $e){
            echo "Errore: " . $e->getMessage() . "<br>";
        }

        try{
            $this -> setExpireDate($_expireDate);
        }catch(Exception $e){
            echo "Errore: " . $e->getMessage() . "<br>";
        }

    }
    
    public function setCreditCardNumber($setNumberCard) {

        $checkNumberCard = str_replace(' ', '', $setNumberCard);

        if (strlen($checkNumberCard) <= 15) {
            throw new Exception ("Carta di credito non valida, numeri insufficienti");
        }

        return $this -> numberCard = $setNumberCard;

    }

    public function setExpireDate($newExpireDate) {
        $date_now = date("d/m/Y");
        var_dump($date_now);
        var_dump($newExpireDate);
        /* $dateNowTimeStamp = strtotime($date_now);
        $dateExpired = strtotime($newExpireDate);
        var_dump($dateNowTimeStamp);
        var_dump($dateExpired); */
        

        if($newExpireDate  < $date_now){
            throw new Exception ("Carta di credito scaduta");
        }

        
        $this -> expireDate = $newExpireDate;
    }

    public function getInfoCreditCard(){
        $infoCard = array();
        $infoCard[] = $this -> numberCard;
        $infoCard[] = $this -> expireDate;
        var_dump(($infoCard));
        
        return $this-> infoCreditCard = $infoCard;
    }

    public function addCreditCard($infoCreditCard) {
        foreach ($infoCreditCard as $dateCreditCard) {
            $this -> paymentMethod[] = $dateCreditCard;
        }
    }

    public function getNumberCard(){
        return $this -> numberCard;
    }

    public function getExpireDate(){
        return $this -> expireDate;
    }
}


?>