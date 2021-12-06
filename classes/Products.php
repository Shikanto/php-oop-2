<?php


    class Products {
        
        public $img = "";
        public $name = "";
        public $price = "";
        public $description = "";

        public function setImgProduct($productImg){
           $this -> img =$productImg;
        }

        public function setNameProduct($productName){
            var_dump($productName);
            checkString($productName);
            $this -> name = $productName;
        }

        public function setPriceProduct($productPrice) {
            if(!ctype_digit($productPrice)){
                exit("Prezzo prodotto non valido");
            }

            $this -> price = $productPrice . ' €';
        }
        
        public function setDescriptionProduct($productDescription) {
            
            checkString($productDescription);
            
            if(strlen($productDescription) <= 15){
                exit("Descrizione prodotto troppo corta");
            }

            $this -> description = $productDescription;
        }

        public function getImgProduct(){
            return "./images/" .  $this -> img;
        }

        public function getNameProduct(){
            return $this->name;
        }

        public function getPriceProduct(){
            return $this -> price;
        }

        public function getDescriptionProduct(){
            return $this -> description;
        }
    }

    
?>
