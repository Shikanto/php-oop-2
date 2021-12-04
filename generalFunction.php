<?php
    
    function checkSPecialCar($stringToCheck){
        $specialCar = ["!", "?", "_", "-", "(", ")","="];
        $check = "false";
        foreach ($specialCar as $car) {
            if (!strpos($stringToCheck, $car)){
                $check = "false";
            } else {
                $check = "true";
                return $check;
            }      
        }
        return $check;
        
    }

    function checkDomainEmail($domainToCheck){
        $domains = ["gmail", "libero", "aruba", "tin", "outlook", 
        "virgilio", "hotmail"];

        $check = "false";
        foreach ($domains as $nameDomain) {
            if ($domainToCheck === $nameDomain) {
                $check = "true";
                return $check;
            } else {
                $check = "false";
                
            }
        }
        return $check;  
    }

    function checkCountryEmail($emailToCheck){
        $countries = ["it","com", "net", "de", "es", 
        "gb", "fr"];

        foreach ($countries as $country) {
            if ($emailToCheck === $country) {
                $check = "true";
                return $check;
            } else {
                $check = "false";

            } 
        }
        return $check; 
    }

?>