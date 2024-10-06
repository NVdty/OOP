<?php

//class
    class robot{
    //property
        public $suara;
        public $berat;
 
//konstruktor 

    public function __construct($suara, $berat){
        $this->suara = $suara;
        $this->berat = $berat;
}

    //metode set
    public function set_suara($suara){
        $this->suara = $suara;
        return $this;
        
    }
    public function get_suara(){
        return $this->suara;
    }
    public function set_berat($berat){
        $this->berat = $berat;
        }
            public function get_berat(){
                return $this->berat;
            }
            
    }
   
   
?>