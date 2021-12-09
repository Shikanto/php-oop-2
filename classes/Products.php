<?php


    class Products {
        
        use GeneralFunction; 

        public $img = "";
        public $name = "";
        public $price = "";
        public $description = "";

        public function setImgProduct($productImg){
           $this -> img =$productImg;
        }

        public function setNameProduct($productName){
            var_dump($productName);
            $this->checkString($productName);
            $this -> name = $productName;
        }

        public function setPriceProduct($productPrice) {
            if(!ctype_digit($productPrice)){
                throw new Exception("Prezzo prodotto non valido");
            }

            $this -> price = $productPrice . ' €';
        }
        
        public function setDescriptionProduct($productDescription) {
            
            $this->checkString($productDescription);
            
            if(strlen($productDescription) <= 15){
                throw new Exception("Descrizione prodotto troppo corta");
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
