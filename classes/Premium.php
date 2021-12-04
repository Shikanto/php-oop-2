<?php

class Premium extends User {

    public $level = "";

    
    public function setLevel($checkLevel) {
        $allLevel = ["bronze", "silver", "gold", "platinum", "diamond"];

        $lowerCheckLevel = strtolower($checkLevel);

        if (!in_array($lowerCheckLevel, $allLevel)) {
            exit ('livello non valido');
        } else {
            return $this-> level = ucfirst($lowerCheckLevel);
        };
    
    }

    public function getLevel(){
        return $this -> level;
    }

   

    public function setSconto($level){
        
        $lowerLevel = strtolower($level);

        if($lowerLevel === ""){
            exit("Mi dispiace ma non hai diritto a nessuno sconto");
            
        };
        
        if($lowerLevel === "bronze"){
            return $this -> sconto = 5;
            
        };
        if($lowerLevel === "silver"){
            return $this -> sconto = 10;
            
        }; 
        if($lowerLevel === "gold"){
            return $this -> sconto = 25;
            
        }; 
        if($lowerLevel === "platinum"){
            return $this -> sconto = 45;
            
        }; 
        if($lowerLevel === "diamond"){
            return $this -> sconto = 65;
            
        }; 
    }

    public function getSconto() {
        return $this-> sconto;
    }
}


?>
