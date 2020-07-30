<?php 

    class Animal {
    // buat property untuk class Animal
    public $legs=2;
    public $cold_blooded=false;
    public $name;

    public function __construct($a){
        $this->name = $a;
    }
    }
?>    
